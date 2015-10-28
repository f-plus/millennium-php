<?php

namespace FPlus\Millennium\Model;

class ArrayOfService
{
    /**
     * @var Service[]
     */
    protected $Service = null;

    public function __construct()
    {
    }

    /**
     * @return Service[]
     */
    public function getService()
    {
        return $this->Service;
    }

    /**
     * @param Service[] $Service
     *
     * @return \Millennium\Soap\ArrayOfService
     */
    public function setService(array $Service = null)
    {
        $this->Service = $Service;

        return $this;
    }
}
