<?php

namespace FPlus\Millennium\Soap\Message;

class GetServicePackagesResponse
{
    /**
     * @var ArrayOfServicePackage
     */
    protected $GetServicePackagesResult;

    /**
     * @param ArrayOfServicePackage $GetServicePackagesResult
     */
    public function __construct($GetServicePackagesResult)
    {
        $this->GetServicePackagesResult = $GetServicePackagesResult;
    }

    /**
     * @return ArrayOfServicePackage
     */
    public function getGetServicePackagesResult()
    {
        return $this->GetServicePackagesResult;
    }

    /**
     * @param ArrayOfServicePackage $GetServicePackagesResult
     *
     * @return GetServicePackagesResponse
     */
    public function setGetServicePackagesResult($GetServicePackagesResult)
    {
        $this->GetServicePackagesResult = $GetServicePackagesResult;

        return $this;
    }
}
