<?php

namespace FPlus\Millennium\Model;

class ArrayOfGC
{
    /**
     * @var GC[]
     */
    protected $GC;

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
     * @return ArrayOfGC
     */
    public function setGC(array $GC = null)
    {
        $this->GC = $GC;

        return $this;
    }
}
