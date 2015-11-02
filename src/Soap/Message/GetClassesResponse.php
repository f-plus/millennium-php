<?php

namespace FPlus\Millennium\Soap\Message;

class GetClassesResponse
{
    /**
     * @var ArrayOfService
     */
    protected $GetClassesResult;

    /**
     * @param ArrayOfService $GetClassesResult
     */
    public function __construct($GetClassesResult)
    {
        $this->GetClassesResult = $GetClassesResult;
    }

    /**
     * @return ArrayOfService
     */
    public function getGetClassesResult()
    {
        return $this->GetClassesResult;
    }

    /**
     * @param ArrayOfService $GetClassesResult
     *
     * @return GetClassesResponse
     */
    public function setGetClassesResult($GetClassesResult)
    {
        $this->GetClassesResult = $GetClassesResult;

        return $this;
    }
}
