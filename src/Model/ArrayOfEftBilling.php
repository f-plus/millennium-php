<?php

namespace FPlus\Millennium\Model;

class ArrayOfEftBilling
{
    /**
     * @var EftBilling[]
     */
    protected $EftBilling;

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
     * @return ArrayOfEftBilling
     */
    public function setEftBilling(array $EftBilling = null)
    {
        $this->EftBilling = $EftBilling;

        return $this;
    }
}
