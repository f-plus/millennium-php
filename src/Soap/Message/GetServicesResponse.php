<?php

namespace FPlus\Millennium\Soap\Message;

class GetServicesResponse
{
    /**
     * @var ArrayOfService
     */
    protected $GetServicesResult = null;

    /**
     * @param ArrayOfService $GetServicesResult
     */
    public function __construct($GetServicesResult)
    {
        $this->GetServicesResult = $GetServicesResult;
    }

    /**
     * @return ArrayOfService
     */
    public function getGetServicesResult()
    {
        return $this->GetServicesResult;
    }

    /**
     * @param ArrayOfService $GetServicesResult
     *
     * @return \Millennium\Soap\GetServicesResponse
     */
    public function setGetServicesResult($GetServicesResult)
    {
        $this->GetServicesResult = $GetServicesResult;

        return $this;
    }
}
