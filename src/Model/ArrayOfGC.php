<?php

namespace FPlus\Millennium\Model;

class ArrayOfGC
{
    /**
     * @var GC[]
     */
    protected $GC = null;

    public function __construct()
    {
    }

    /**
     * @return GC[]
     */
    public function getGC()
    {
        return $this->GC;
    }

    /**
     * @param GC[] $GC
     *
     * @return \Millennium\Soap\ArrayOfGC
     */
    public function setGC(array $GC = null)
    {
        $this->GC = $GC;

        return $this;
    }
}
