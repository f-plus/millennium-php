<?php

namespace FPlus\Millennium\Soap\Message;

class GetServerTimeZoneResponse
{
    /**
     * @var TimeZoneInfo
     */
    protected $GetServerTimeZoneResult = null;

    /**
     * @param TimeZoneInfo $GetServerTimeZoneResult
     */
    public function __construct($GetServerTimeZoneResult)
    {
        $this->GetServerTimeZoneResult = $GetServerTimeZoneResult;
    }

    /**
     * @return TimeZoneInfo
     */
    public function getGetServerTimeZoneResult()
    {
        return $this->GetServerTimeZoneResult;
    }

    /**
     * @param TimeZoneInfo $GetServerTimeZoneResult
     *
     * @return \Millennium\Soap\GetServerTimeZoneResponse
     */
    public function setGetServerTimeZoneResult($GetServerTimeZoneResult)
    {
        $this->GetServerTimeZoneResult = $GetServerTimeZoneResult;

        return $this;
    }
}
