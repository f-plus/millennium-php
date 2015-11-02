<?php

namespace FPlus\Millennium\Soap\Message;

class LogOnResponse
{
    /**
     * @var SessionClient
     */
    protected $LogOnResult;

    /**
     * @var CustomException
     */
    protected $error;

    /**
     * @param SessionClient   $LogOnResult
     * @param CustomException $error
     */
    public function __construct($LogOnResult, $error)
    {
        $this->LogOnResult = $LogOnResult;
        $this->error = $error;
    }

    /**
     * @return SessionClient
     */
    public function getLogOnResult()
    {
        return $this->LogOnResult;
    }

    /**
     * @param SessionClient $LogOnResult
     *
     * @return LogOnResponse
     */
    public function setLogOnResult($LogOnResult)
    {
        $this->LogOnResult = $LogOnResult;

        return $this;
    }

    /**
     * @return CustomException
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param CustomException $error
     *
     * @return LogOnResponse
     */
    public function setError($error)
    {
        $this->error = $error;

        return $this;
    }
}
