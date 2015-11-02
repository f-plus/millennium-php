<?php

namespace FPlus\Millennium\Soap;

use BeSimple\SoapCommon\FilterHelper;
use BeSimple\SoapCommon\SoapRequest;
use BeSimple\SoapCommon\SoapRequestFilter;
use BeSimple\SoapCommon\SoapResponse;
use BeSimple\SoapCommon\SoapResponseFilter;
use CasperBiering\Dotnet\BinaryXml\SoapDecoder;
use CasperBiering\Dotnet\BinaryXml\SoapEncoder;
use FPlus\Millennium\Model\SessionClient;

class SessionFilter implements SoapRequestFilter, SoapResponseFilter
{
    const NS_CLIENT = 'http://Harms-Software.com/Millennium.NET/Client';
    const PFX_CLIENT = 'msc';
    const NS_DTO = 'http://schemas.datacontract.org/2004/07/Millennium.NET.DTO';
    const PFX_DTO = 'msd';

    private $encoder;
    private $decoder;
    private $session;

    public function __construct()
    {
        $this->encoder = new SoapEncoder();
        $this->decoder = new SoapDecoder();
    }

    public function getSession()
    {
        return $this->session;
    }

    public function setSession(SessionClient $session)
    {
        $this->session = $session;

        return $this;
    }

    public function resetFilter()
    {
        $this->session = null;
    }

    public function filterRequest(SoapRequest $request)
    {
        if ($this->session === null) {
            return;
        }

        $dom = $request->getContentDocument();
        $helper = new FilterHelper($dom);

        $helper->addNamespace(self::PFX_CLIENT, self::NS_CLIENT);
        $helper->addNamespace(self::PFX_DTO, self::NS_DTO);

        $header = $helper->createElement(self::NS_CLIENT, 'SessionHeader');
        $helper->addHeaderElement($header);

        $client = $helper->createElement(self::NS_CLIENT, 'SessionClient');
        $header->appendChild($client);

        $client->appendChild($helper->createElement(self::NS_DTO, 'ClientId', $this->session->getClientId()));
        $client->appendChild($helper->createElement(self::NS_DTO, 'ConnectedOn', $this->session->getConnectedOn()->format(\DateTime::ATOM)));
        $client->appendChild($helper->createElement(self::NS_DTO, 'DataPath', $this->session->getDataPath()));
        $client->appendChild($helper->createElement(self::NS_DTO, 'ExpireOn', $this->session->getExpireOn()->format(\DateTime::ATOM)));
        $client->appendChild($helper->createElement(self::NS_DTO, 'Id', $this->session->getId()));
    }

    public function filterResponse(SoapResponse $response)
    {
    }
}
