<?php

namespace FPlus\Millennium\Soap\Message;

class GetClientResponse
{
    /**
     * @var Client
     */
    protected $GetClientResult = null;

    /**
     * @param Client $GetClientResult
     */
    public function __construct($GetClientResult)
    {
        $this->GetClientResult = $GetClientResult;
    }

    /**
     * @return Client
     */
    public function getGetClientResult()
    {
        return $this->GetClientResult;
    }

    /**
     * @param Client $GetClientResult
     *
     * @return \Millennium\Soap\GetClientResponse
     */
    public function setGetClientResult($GetClientResult)
    {
        $this->GetClientResult = $GetClientResult;

        return $this;
    }
}
