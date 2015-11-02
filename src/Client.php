<?php

namespace FPlus\Millennium;

use BeSimple\SoapClient\WsAddressingFilter;
use FPlus\Millennium\Model\SessionClient;
use FPlus\Millennium\Soap\BinaryEncodingFilter;
use FPlus\Millennium\Soap\Message\GetSalonInfo;
use FPlus\Millennium\Soap\Message\LogOff;
use FPlus\Millennium\Soap\Message\LogOn;
use FPlus\Millennium\Soap\Message\RetrievePassword;
use FPlus\Millennium\Soap\SessionFilter;
use FPlus\Millennium\Soap\SoapClientBuilder;

class Client
{
    private $client;
    private $wsaFilter;
    private $sessionFilter;

    public function __construct($endpoint, array $options = [])
    {
        $options = array_merge([
            'client' => null,
            'wsdl' => $endpoint.'?singleWsdl',
        ], $options);

        $this->client = $options['client'] ?: SoapClientBuilder::createWithDefaults()->withWsdl($options['wsdl'])->build();
        $soapKernel = $this->client->getSoapKernel();

        $binaryFilter = new BinaryEncodingFilter();
        $soapKernel->registerFilter($binaryFilter);

        $this->wsaFilter = new WsAddressingFilter();
        $this->wsaFilter->setReplyTo(WsAddressingFilter::ENDPOINT_REFERENCE_ANONYMOUS);
        $soapKernel->registerFilter($this->wsaFilter);

        $this->sessionFilter = new SessionFilter();
        $this->sessionFilter->setSession(SessionClient::createWithDefaults());
        $soapKernel->registerFilter($this->sessionFilter);
    }

    public function getSession()
    {
        return $this->sessionFilter->getSession();
    }

    public function setSession(SessionClient $session)
    {
        $this->sessionFilter->setSession($session);

        return $this;
    }

    public function invalidateSession()
    {
        if ($this->getSession()->getClientId() > 0) {
            if (!$this->call('LogOff', new LogOff())->getLogOffResult()) {
                throw new ClientException('Could not invalidate session.');
            }
        }

        $this->setSession(SessionClient::createWithDefaults());

        return $this;
    }

    public function authenticate($username, $password)
    {
        return $this->call('LogOn', new LogOn($username, $password))->getLogOnResult();
    }

    public function retrievePassword($email, $language)
    {
        return $this->call('RetrivePassword', new RetrievePassword($email, $language))->getRetrievePasswordResult();
    }

    public function getSalonInfo()
    {
        return $this->call('GetSalonInfo', new GetSalonInfo())->getGetSalonInfoResult();
    }

    protected function call($action, $parameters)
    {
        $this->wsaFilter->setMessageId();

        return $this->client->__soapCall($action, [$parameters]);
    }
}
