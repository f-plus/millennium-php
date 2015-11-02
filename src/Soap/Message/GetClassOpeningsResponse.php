<?php

namespace FPlus\Millennium\Soap\Message;

class GetClassOpeningsResponse
{
    /**
     * @var ArrayOfOpeningClass
     */
    protected $GetClassOpeningsResult;

    /**
     * @param ArrayOfOpeningClass $GetClassOpeningsResult
     */
    public function __construct($GetClassOpeningsResult)
    {
        $this->GetClassOpeningsResult = $GetClassOpeningsResult;
    }

    /**
     * @return ArrayOfOpeningClass
     */
    public function getGetClassOpeningsResult()
    {
        return $this->GetClassOpeningsResult;
    }

    /**
     * @param ArrayOfOpeningClass $GetClassOpeningsResult
     *
     * @return GetClassOpeningsResponse
     */
    public function setGetClassOpeningsResult($GetClassOpeningsResult)
    {
        $this->GetClassOpeningsResult = $GetClassOpeningsResult;

        return $this;
    }
}
