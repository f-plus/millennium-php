<?php

namespace FPlus\Millennium\Soap\Message;

class GetClientCards
{
    /**
     * @var int
     */
    protected $clientId;

    /**
     * @var bool
     */
    protected $last4Only;

    /**
     * @param int  $clientId
     * @param bool $last4Only
     */
    public function __construct($clientId, $last4Only)
    {
        $this->clientId = $clientId;
        $this->last4Only = $last4Only;
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
     * @return GetClientCards
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * @return bool
     */
    public function getLast4Only()
    {
        return $this->last4Only;
    }

    /**
     * @param bool $last4Only
     *
     * @return GetClientCards
     */
    public function setLast4Only($last4Only)
    {
        $this->last4Only = $last4Only;

        return $this;
    }
}
