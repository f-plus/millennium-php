<?php

namespace FPlus\Millennium\Soap\Message;

class GetServiceClassesResponse
{
    /**
     * @var ArrayOfServiceClass
     */
    protected $GetServiceClassesResult = null;

    /**
     * @param ArrayOfServiceClass $GetServiceClassesResult
     */
    public function __construct($GetServiceClassesResult)
    {
        $this->GetServiceClassesResult = $GetServiceClassesResult;
    }

    /**
     * @return ArrayOfServiceClass
     */
    public function getGetServiceClassesResult()
    {
        return $this->GetServiceClassesResult;
    }

    /**
     * @param ArrayOfServiceClass $GetServiceClassesResult
     *
     * @return \Millennium\Soap\GetServiceClassesResponse
     */
    public function setGetServiceClassesResult($GetServiceClassesResult)
    {
        $this->GetServiceClassesResult = $GetServiceClassesResult;

        return $this;
    }
}
