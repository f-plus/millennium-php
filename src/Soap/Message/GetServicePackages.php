<?php

namespace FPlus\Millennium\Soap\Message;

class GetServicePackages
{
    /**
     * @var int
     */
    protected $clientId = null;

    /**
     * @var bool
     */
    protected $onlineOnly = null;

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
     * @return \Millennium\Soap\GetServicePackages
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
     * @return \Millennium\Soap\GetServicePackages
     */
    public function setOnlineOnly($onlineOnly)
    {
        $this->onlineOnly = $onlineOnly;

        return $this;
    }
}
