<?php

namespace FPlus\Millennium\Soap\Message;

class GetHistoryResponse
{
    /**
     * @var ClientHistoryMap
     */
    protected $GetHistoryResult;

    /**
     * @param ClientHistoryMap $GetHistoryResult
     */
    public function __construct($Result)
    {
        $this->GetHistoryResult = $Result;
    }

    /**
     * @return ClientHistoryMap
     */
    public function getResult()
    {
        return $this->GetHistoryResult;
    }

    /**
     * @param ClientHistoryMap $Result
     *
     * @return GetHistoryResponse
     */
    public function setResult($Result)
    {
        $this->GetHistoryResult = $Result;

        return $this;
    }
}
