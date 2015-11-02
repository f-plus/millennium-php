<?php

namespace FPlus\Millennium\Soap\Message;

class GetClientHistoryResponse
{
    /**
     * @var ArrayOfClientHistory
     */
    protected $GetClientHistoryResult;

    /**
     * @param ArrayOfClientHistory $GetClientHistoryResult
     */
    public function __construct($GetClientHistoryResult)
    {
        $this->GetClientHistoryResult = $GetClientHistoryResult;
    }

    /**
     * @return ArrayOfClientHistory
     */
    public function getGetClientHistoryResult()
    {
        return $this->GetClientHistoryResult;
    }

    /**
     * @param ArrayOfClientHistory $GetClientHistoryResult
     *
     * @return GetClientHistoryResponse
     */
    public function setGetClientHistoryResult($GetClientHistoryResult)
    {
        $this->GetClientHistoryResult = $GetClientHistoryResult;

        return $this;
    }
}
