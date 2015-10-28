<?php

namespace FPlus\Millennium\Soap\Message;

class GetGiftCertificates
{
    /**
     * @var int
     */
    protected $clientId = null;

    /**
     * @param int $clientId
     */
    public function __construct($clientId)
    {
        $this->clientId = $clientId;
    }

    /**
     * @return int
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * @param int $clientId
     *
     * @return \Millennium\Soap\GetGiftCertificates
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;

        return $this;
    }
}
