<?php

namespace FPlus\Millennium\Model;

class ArrayOfGCType
{
    /**
     * @var GCType[]
     */
    protected $GCType;

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
     * @return ArrayOfGCType
     */
    public function setGCType(array $GCType = null)
    {
        $this->GCType = $GCType;

        return $this;
    }
}
