<?php

namespace FPlus\Millennium\Soap\Message;

class GetClientResponse
{
    /**
     * @var Client
     */
    protected $GetClientResult;

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
     * @return GetClientResponse
     */
    public function setGetClientResult($GetClientResult)
    {
        $this->GetClientResult = $GetClientResult;

        return $this;
    }
}
