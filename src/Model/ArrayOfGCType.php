<?php

namespace FPlus\Millennium\Model;

class ArrayOfGCType
{
    /**
     * @var GCType[]
     */
    protected $GCType = null;

    public function __construct()
    {
    }

    /**
     * @return GCType[]
     */
    public function getGCType()
    {
        return $this->GCType;
    }

    /**
     * @param GCType[] $GCType
     *
     * @return \Millennium\Soap\ArrayOfGCType
     */
    public function setGCType(array $GCType = null)
    {
        $this->GCType = $GCType;

        return $this;
    }
}
