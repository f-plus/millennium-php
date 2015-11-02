<?php

namespace FPlus\Millennium\Soap\Message;

class RetrivePasswordResponse
{
    /**
     * @var bool
     */
    protected $RetrivePasswordResult;

    /**
     * @param bool $RetrivePasswordResult
     */
    public function __construct($RetrivePasswordResult)
    {
        $this->RetrivePasswordResult = $RetrivePasswordResult;
    }

    /**
     * @return bool
     */
    public function getRetrivePasswordResult()
    {
        return $this->RetrivePasswordResult;
    }

    /**
     * @param bool $RetrivePasswordResult
     *
     * @return RetrivePasswordResponse
     */
    public function setRetrivePasswordResult($RetrivePasswordResult)
    {
        $this->RetrivePasswordResult = $RetrivePasswordResult;

        return $this;
    }
}
