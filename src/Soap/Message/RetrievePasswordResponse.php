<?php

namespace FPlus\Millennium\Soap\Message;

class RetrievePasswordResponse
{
    /**
     * @var bool
     */
    protected $RetrivePasswordResult;

    /**
     * @param bool $RetrievePasswordResult
     */
    public function __construct($RetrievePasswordResult)
    {
        $this->RetrivePasswordResult = $RetrievePasswordResult;
    }

    /**
     * @return bool
     */
    public function getRetrievePasswordResult()
    {
        return $this->RetrivePasswordResult;
    }

    /**
     * @param bool $RetrievePasswordResult
     *
     * @return RetrievePasswordResponse
     */
    public function setRetrievePasswordResult($RetrievePasswordResult)
    {
        $this->RetrivePasswordResult = $RetrievePasswordResult;

        return $this;
    }
}
