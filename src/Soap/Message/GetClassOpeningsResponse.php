<?php

namespace FPlus\Millennium\Soap\Message;

class GetClassOpeningsResponse
{
    /**
     * @var ArrayOfOpeningClass
     */
    protected $GetClassOpeningsResult = null;

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
     * @return \Millennium\Soap\GetClassOpeningsResponse
     */
    public function setGetClassOpeningsResult($GetClassOpeningsResult)
    {
        $this->GetClassOpeningsResult = $GetClassOpeningsResult;

        return $this;
    }
}
