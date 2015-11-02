<?php

namespace FPlus\Millennium\Model;

class ArrayOfServicePackage
{
    /**
     * @var ServicePackage[]
     */
    protected $ServicePackage;

    public function __construct()
    {
    }

    /**
     * @return ServicePackage[]
     */
    public function getServicePackage()
    {
        return $this->ServicePackage;
    }

    /**
     * @param ServicePackage[] $ServicePackage
     *
     * @return ArrayOfServicePackage
     */
    public function setServicePackage(array $ServicePackage = null)
    {
        $this->ServicePackage = $ServicePackage;

        return $this;
    }
}
