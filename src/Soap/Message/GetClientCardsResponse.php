<?php

namespace FPlus\Millennium\Soap\Message;

class GetClientCardsResponse
{
    /**
     * @var ArrayOfClientCard
     */
    protected $GetClientCardsResult = null;

    /**
     * @param ArrayOfClientCard $GetClientCardsResult
     */
    public function __construct($GetClientCardsResult)
    {
        $this->GetClientCardsResult = $GetClientCardsResult;
    }

    /**
     * @return ArrayOfClientCard
     */
    public function getGetClientCardsResult()
    {
        return $this->GetClientCardsResult;
    }

    /**
     * @param ArrayOfClientCard $GetClientCardsResult
     *
     * @return \Millennium\Soap\GetClientCardsResponse
     */
    public function setGetClientCardsResult($GetClientCardsResult)
    {
        $this->GetClientCardsResult = $GetClientCardsResult;

        return $this;
    }
}
