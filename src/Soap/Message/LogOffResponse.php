<?php

namespace FPlus\Millennium\Soap\Message;

class LogOffResponse
{
    /**
     * @var bool
     */
    protected $LogOffResult = null;

    /**
     * @param bool $LogOffResult
     */
    public function __construct($LogOffResult)
    {
        $this->LogOffResult = $LogOffResult;
    }

    /**
     * @return bool
     */
    public function getLogOffResult()
    {
        return $this->LogOffResult;
    }

    /**
     * @param bool $LogOffResult
     *
     * @return \Millennium\Soap\LogOffResponse
     */
    public function setLogOffResult($LogOffResult)
    {
        $this->LogOffResult = $LogOffResult;

        return $this;
    }
}
