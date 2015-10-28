<?php

namespace FPlus\Millennium\Soap\Message;

class RetrivePasswordResponse
{
    /**
     * @var bool
     */
    protected $RetrivePasswordResult = null;

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
     * @return \Millennium\Soap\RetrivePasswordResponse
     */
    public function setRetrivePasswordResult($RetrivePasswordResult)
    {
        $this->RetrivePasswordResult = $RetrivePasswordResult;

        return $this;
    }
}
