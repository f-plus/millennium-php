<?php

namespace FPlus\Millennium\Soap\Message;

class GetServiceSubClassesResponse
{
    /**
     * @var ArrayOfServiceSubClass
     */
    protected $GetServiceSubClassesResult;

    /**
     * @param ArrayOfServiceSubClass $GetServiceSubClassesResult
     */
    public function __construct($GetServiceSubClassesResult)
    {
        $this->GetServiceSubClassesResult = $GetServiceSubClassesResult;
    }

    /**
     * @return ArrayOfServiceSubClass
     */
    public function getGetServiceSubClassesResult()
    {
        return $this->GetServiceSubClassesResult;
    }

    /**
     * @param ArrayOfServiceSubClass $GetServiceSubClassesResult
     *
     * @return GetServiceSubClassesResponse
     */
    public function setGetServiceSubClassesResult($GetServiceSubClassesResult)
    {
        $this->GetServiceSubClassesResult = $GetServiceSubClassesResult;

        return $this;
    }
}
