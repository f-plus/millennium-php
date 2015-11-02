<?php

namespace FPlus\Millennium\Soap\Message;

class SaveClientResponse
{
    /**
     * @var int
     */
    protected $SaveClientResult;

    /**
     * @param int $SaveClientResult
     */
    public function __construct($SaveClientResult)
    {
        $this->SaveClientResult = $SaveClientResult;
    }

    /**
     * @return int
     */
    public function getSaveClientResult()
    {
        return $this->SaveClientResult;
    }

    /**
     * @param int $SaveClientResult
     *
     * @return SaveClientResponse
     */
    public function setSaveClientResult($SaveClientResult)
    {
        $this->SaveClientResult = $SaveClientResult;

        return $this;
    }
}
