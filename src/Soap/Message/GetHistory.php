<?php

namespace FPlus\Millennium\Soap\Message;

class GetHistory
{
    /**
     * @var int
     */
    protected $clientId;

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
     * @return GetHistory
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;

        return $this;
    }
}
