<?php

namespace FPlus\Millennium\Soap\Message;

class GetGCTypesResponse
{
    /**
     * @var ArrayOfGCType
     */
    protected $GetGCTypesResult;

    /**
     * @param ArrayOfGCType $GetGCTypesResult
     */
    public function __construct($GetGCTypesResult)
    {
        $this->GetGCTypesResult = $GetGCTypesResult;
    }

    /**
     * @return ArrayOfGCType
     */
    public function getGetGCTypesResult()
    {
        return $this->GetGCTypesResult;
    }

    /**
     * @param ArrayOfGCType $GetGCTypesResult
     *
     * @return GetGCTypesResponse
     */
    public function setGetGCTypesResult($GetGCTypesResult)
    {
        $this->GetGCTypesResult = $GetGCTypesResult;

        return $this;
    }
}
