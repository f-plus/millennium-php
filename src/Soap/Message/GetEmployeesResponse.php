<?php

namespace FPlus\Millennium\Soap\Message;

class GetEmployeesResponse
{
    /**
     * @var ArrayOfEmployee
     */
    protected $GetEmployeesResult = null;

    /**
     * @param ArrayOfEmployee $GetEmployeesResult
     */
    public function __construct($GetEmployeesResult)
    {
        $this->GetEmployeesResult = $GetEmployeesResult;
    }

    /**
     * @return ArrayOfEmployee
     */
    public function getGetEmployeesResult()
    {
        return $this->GetEmployeesResult;
    }

    /**
     * @param ArrayOfEmployee $GetEmployeesResult
     *
     * @return \Millennium\Soap\GetEmployeesResponse
     */
    public function setGetEmployeesResult($GetEmployeesResult)
    {
        $this->GetEmployeesResult = $GetEmployeesResult;

        return $this;
    }
}
