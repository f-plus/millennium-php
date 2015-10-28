<?php

namespace FPlus\Millennium\Model;

class ArrayOfstring
{
    /**
     * @var string[]
     */
    protected $string = null;

    public function __construct()
    {
    }

    /**
     * @return string[]
     */
    public function getString()
    {
        return $this->string;
    }

    /**
     * @param string[] $string
     *
     * @return \Millennium\Soap\ArrayOfstring
     */
    public function setString(array $string = null)
    {
        $this->string = $string;

        return $this;
    }
}
