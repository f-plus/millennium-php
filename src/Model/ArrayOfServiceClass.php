<?php

namespace FPlus\Millennium\Model;

class ArrayOfServiceClass
{
    /**
     * @var ServiceClass[]
     */
    protected $ServiceClass = null;

    public function __construct()
    {
    }

    /**
     * @return ServiceClass[]
     */
    public function getServiceClass()
    {
        return $this->ServiceClass;
    }

    /**
     * @param ServiceClass[] $ServiceClass
     *
     * @return \Millennium\Soap\ArrayOfServiceClass
     */
    public function setServiceClass(array $ServiceClass = null)
    {
        $this->ServiceClass = $ServiceClass;

        return $this;
    }
}
