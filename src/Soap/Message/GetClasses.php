<?php

namespace FPlus\Millennium\Soap\Message;

class GetClasses
{
    /**
     * @var bool
     */
    protected $onLineOnly = null;

    /**
     * @param bool $onLineOnly
     */
    public function __construct($onLineOnly)
    {
        $this->onLineOnly = $onLineOnly;
    }

    /**
     * @return bool
     */
    public function getOnLineOnly()
    {
        return $this->onLineOnly;
    }

    /**
     * @param bool $onLineOnly
     *
     * @return \Millennium\Soap\GetClasses
     */
    public function setOnLineOnly($onLineOnly)
    {
        $this->onLineOnly = $onLineOnly;

        return $this;
    }
}
