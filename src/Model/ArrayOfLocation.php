<?php

namespace FPlus\Millennium\Model;

class ArrayOfLocation
{
    /**
     * @var Location[]
     */
    protected $Location;

    public function __construct()
    {
    }

    /**
     * @return Location[]
     */
    public function getLocation()
    {
        return $this->Location;
    }

    /**
     * @param Location[] $Location
     *
     * @return ArrayOfLocation
     */
    public function setLocation(array $Location = null)
    {
        $this->Location = $Location;

        return $this;
    }
}
