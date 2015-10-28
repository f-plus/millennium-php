<?php

namespace FPlus\Millennium\Model;

class ServicePackage extends Service
{
    /**
     * @var int
     */
    protected $Booked = null;

    /**
     * @var bool
     */
    protected $CanBeBookedOnline = null;

    /**
     * @var float
     */
    protected $PriceEach = null;

    /**
     * @var int
     */
    protected $Quantity = null;

    /**
     * @var int
     */
    protected $Remaining = null;

    /**
     * @var float
     */
    protected $ValueEach = null;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return int
     */
    public function getBooked()
    {
        return $this->Booked;
    }

    /**
     * @param int $Booked
     *
     * @return \Millennium\Soap\ServicePackage
     */
    public function setBooked($Booked)
    {
        $this->Booked = $Booked;

        return $this;
    }

    /**
     * @return bool
     */
    public function getCanBeBookedOnline()
    {
        return $this->CanBeBookedOnline;
    }

    /**
     * @param bool $CanBeBookedOnline
     *
     * @return \Millennium\Soap\ServicePackage
     */
    public function setCanBeBookedOnline($CanBeBookedOnline)
    {
        $this->CanBeBookedOnline = $CanBeBookedOnline;

        return $this;
    }

    /**
     * @return float
     */
    public function getPriceEach()
    {
        return $this->PriceEach;
    }

    /**
     * @param float $PriceEach
     *
     * @return \Millennium\Soap\ServicePackage
     */
    public function setPriceEach($PriceEach)
    {
        $this->PriceEach = $PriceEach;

        return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * @param int $Quantity
     *
     * @return \Millennium\Soap\ServicePackage
     */
    public function setQuantity($Quantity)
    {
        $this->Quantity = $Quantity;

        return $this;
    }

    /**
     * @return int
     */
    public function getRemaining()
    {
        return $this->Remaining;
    }

    /**
     * @param int $Remaining
     *
     * @return \Millennium\Soap\ServicePackage
     */
    public function setRemaining($Remaining)
    {
        $this->Remaining = $Remaining;

        return $this;
    }

    /**
     * @return float
     */
    public function getValueEach()
    {
        return $this->ValueEach;
    }

    /**
     * @param float $ValueEach
     *
     * @return \Millennium\Soap\ServicePackage
     */
    public function setValueEach($ValueEach)
    {
        $this->ValueEach = $ValueEach;

        return $this;
    }
}
