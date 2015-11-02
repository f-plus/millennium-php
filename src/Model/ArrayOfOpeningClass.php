<?php

namespace FPlus\Millennium\Model;

class ArrayOfOpeningClass
{
    /**
     * @var OpeningClass[]
     */
    protected $OpeningClass;

    public function __construct()
    {
    }

    /**
     * @return OpeningClass[]
     */
    public function getOpeningClass()
    {
        return $this->OpeningClass;
    }

    /**
     * @param OpeningClass[] $OpeningClass
     *
     * @return ArrayOfOpeningClass
     */
    public function setOpeningClass(array $OpeningClass = null)
    {
        $this->OpeningClass = $OpeningClass;

        return $this;
    }
}
