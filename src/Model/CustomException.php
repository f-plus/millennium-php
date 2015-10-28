<?php

namespace FPlus\Millennium\Model;

class CustomException
{
    /**
     * @var string
     */
    protected $FullMessage = null;

    /**
     * @var string
     */
    protected $Message = null;

    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getFullMessage()
    {
        return $this->FullMessage;
    }

    /**
     * @param string $FullMessage
     *
     * @return \Millennium\Soap\CustomException
     */
    public function setFullMessage($FullMessage)
    {
        $this->FullMessage = $FullMessage;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * @param string $Message
     *
     * @return \Millennium\Soap\CustomException
     */
    public function setMessage($Message)
    {
        $this->Message = $Message;

        return $this;
    }
}
