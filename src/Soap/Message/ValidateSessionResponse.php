<?php

namespace FPlus\Millennium\Soap\Message;

class ValidateSessionResponse
{
    /**
     * @var int
     */
    protected $ValidateSessionResult;

    /**
     * @param int $ValidateSessionResult
     */
    public function __construct($ValidateSessionResult)
    {
        $this->ValidateSessionResult = $ValidateSessionResult;
    }

    /**
     * @return int
     */
    public function getValidateSessionResult()
    {
        return $this->ValidateSessionResult;
    }

    /**
     * @param int $ValidateSessionResult
     *
     * @return ValidateSessionResponse
     */
    public function setValidateSessionResult($ValidateSessionResult)
    {
        $this->ValidateSessionResult = $ValidateSessionResult;

        return $this;
    }
}
