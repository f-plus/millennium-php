<?php

namespace FPlus\Millennium\Soap\Message;

class GetHistoryResponse
{
    /**
     * @var ArrayOfKeyValueOfdateTimeArrayOfClientHistoryabPHSVWZ
     */
    protected $GetHistoryResult = null;

    /**
     * @param ArrayOfKeyValueOfdateTimeArrayOfClientHistoryabPHSVWZ $GetHistoryResult
     */
    public function __construct($GetHistoryResult)
    {
        $this->GetHistoryResult = $GetHistoryResult;
    }

    /**
     * @return ArrayOfKeyValueOfdateTimeArrayOfClientHistoryabPHSVWZ
     */
    public function getGetHistoryResult()
    {
        return $this->GetHistoryResult;
    }

    /**
     * @param ArrayOfKeyValueOfdateTimeArrayOfClientHistoryabPHSVWZ $GetHistoryResult
     *
     * @return \Millennium\Soap\GetHistoryResponse
     */
    public function setGetHistoryResult($GetHistoryResult)
    {
        $this->GetHistoryResult = $GetHistoryResult;

        return $this;
    }
}
