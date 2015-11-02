<?php

namespace FPlus\Millennium\Model;

class ArrayOfService
{
    /**
     * @var Service[]
     */
    protected $Service;

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
     * @return ArrayOfService
     */
    public function setService(array $Service = null)
    {
        $this->Service = $Service;

        return $this;
    }
}
