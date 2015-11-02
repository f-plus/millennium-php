<?php

namespace FPlus\Millennium\Soap\Message;

class SaveGCResponse
{
    /**
     * @var int
     */
    protected $SaveGCResult;

    /**
     * @param int $SaveGCResult
     */
    public function __construct($SaveGCResult)
    {
        $this->SaveGCResult = $SaveGCResult;
    }

    /**
     * @return int
     */
    public function getSaveGCResult()
    {
        return $this->SaveGCResult;
    }

    /**
     * @param int $SaveGCResult
     *
     * @return SaveGCResponse
     */
    public function setSaveGCResult($SaveGCResult)
    {
        $this->SaveGCResult = $SaveGCResult;

        return $this;
    }
}
