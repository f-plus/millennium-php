<?php

namespace FPlus\Millennium\Soap\Message;

class GetSalonInfoResponse
{
    /**
     * @var SalonInfo
     */
    protected $GetSalonInfoResult = null;

    /**
     * @param SalonInfo $GetSalonInfoResult
     */
    public function __construct($GetSalonInfoResult)
    {
        $this->GetSalonInfoResult = $GetSalonInfoResult;
    }

    /**
     * @return SalonInfo
     */
    public function getGetSalonInfoResult()
    {
        return $this->GetSalonInfoResult;
    }

    /**
     * @param SalonInfo $GetSalonInfoResult
     *
     * @return \Millennium\Soap\GetSalonInfoResponse
     */
    public function setGetSalonInfoResult($GetSalonInfoResult)
    {
        $this->GetSalonInfoResult = $GetSalonInfoResult;

        return $this;
    }
}
