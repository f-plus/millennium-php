<?php

namespace FPlus\Millennium\Soap\Message;

class GetOpeningsResponse
{
    /**
     * @var ArrayOfOpening
     */
    protected $GetOpeningsResult = null;

    /**
     * @param ArrayOfOpening $GetOpeningsResult
     */
    public function __construct($GetOpeningsResult)
    {
        $this->GetOpeningsResult = $GetOpeningsResult;
    }

    /**
     * @return ArrayOfOpening
     */
    public function getGetOpeningsResult()
    {
        return $this->GetOpeningsResult;
    }

    /**
     * @param ArrayOfOpening $GetOpeningsResult
     *
     * @return \Millennium\Soap\GetOpeningsResponse
     */
    public function setGetOpeningsResult($GetOpeningsResult)
    {
        $this->GetOpeningsResult = $GetOpeningsResult;

        return $this;
    }
}
