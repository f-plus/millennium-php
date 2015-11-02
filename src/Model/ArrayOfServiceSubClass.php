<?php

namespace FPlus\Millennium\Model;

class ArrayOfServiceSubClass
{
    /**
     * @var ServiceSubClass[]
     */
    protected $ServiceSubClass;

    public function __construct()
    {
    }

    /**
     * @return ServiceSubClass[]
     */
    public function getServiceSubClass()
    {
        return $this->ServiceSubClass;
    }

    /**
     * @param ServiceSubClass[] $ServiceSubClass
     *
     * @return ArrayOfServiceSubClass
     */
    public function setServiceSubClass(array $ServiceSubClass = null)
    {
        $this->ServiceSubClass = $ServiceSubClass;

        return $this;
    }
}
