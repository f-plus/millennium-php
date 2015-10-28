<?php

namespace FPlus\Millennium\Model;

class ArrayOfEftBilling
{
    /**
     * @var EftBilling[]
     */
    protected $EftBilling = null;

    public function __construct()
    {
    }

    /**
     * @return EftBilling[]
     */
    public function getEftBilling()
    {
        return $this->EftBilling;
    }

    /**
     * @param EftBilling[] $EftBilling
     *
     * @return \Millennium\Soap\ArrayOfEftBilling
     */
    public function setEftBilling(array $EftBilling = null)
    {
        $this->EftBilling = $EftBilling;

        return $this;
    }
}
