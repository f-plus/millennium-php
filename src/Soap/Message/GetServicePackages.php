<?php

namespace FPlus\Millennium\Soap\Message;

class GetServicePackages
{
    /**
     * @var int
     */
    protected $clientId;

    /**
     * @var bool
     */
    protected $onlineOnly;

    /**
     * @param int  $clientId
     * @param bool $onlineOnly
     */
    public function __construct($clientId, $onlineOnly)
    {
        $this->clientId = $clientId;
        $this->onlineOnly = $onlineOnly;
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
     * @return GetServicePackages
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * @return bool
     */
    public function getOnlineOnly()
    {
        return $this->onlineOnly;
    }

    /**
     * @param bool $onlineOnly
     *
     * @return GetServicePackages
     */
    public function setOnlineOnly($onlineOnly)
    {
        $this->onlineOnly = $onlineOnly;

        return $this;
    }
}
