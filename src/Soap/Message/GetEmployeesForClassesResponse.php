<?php

namespace FPlus\Millennium\Soap\Message;

class GetEmployeesForClassesResponse
{
    /**
     * @var ArrayOfEmployee
     */
    protected $GetEmployeesForClassesResult = null;

    /**
     * @param ArrayOfEmployee $GetEmployeesForClassesResult
     */
    public function __construct($GetEmployeesForClassesResult)
    {
        $this->GetEmployeesForClassesResult = $GetEmployeesForClassesResult;
    }

    /**
     * @return ArrayOfEmployee
     */
    public function getGetEmployeesForClassesResult()
    {
        return $this->GetEmployeesForClassesResult;
    }

    /**
     * @param ArrayOfEmployee $GetEmployeesForClassesResult
     *
     * @return \Millennium\Soap\GetEmployeesForClassesResponse
     */
    public function setGetEmployeesForClassesResult($GetEmployeesForClassesResult)
    {
        $this->GetEmployeesForClassesResult = $GetEmployeesForClassesResult;

        return $this;
    }
}
