<?php

namespace FPlus\Millennium\Soap\Message;

class GetClient
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
     * @return \Millennium\Soap\GetClient
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;

        return $this;
    }
}
