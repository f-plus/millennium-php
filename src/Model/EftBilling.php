<?php

namespace FPlus\Millennium\Model;

class EftBilling extends BaseDTO
{
    /**
     * @var float
     */
    protected $Amount;

    /**
     * @var \DateTime
     */
    protected $HitDate;

    /**
     * @var int
     */
    protected $Id;

    /**
     * @var BillingStatus
     */
    protected $Status;

    public function __construct()
    {
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @param float $Amount
     *
     * @return EftBilling
     */
    public function setAmount($Amount)
    {
        $this->Amount = $Amount;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getHitDate()
    {
        if ($this->HitDate == null) {
            return null;
        } else {
            return new \DateTime($this->HitDate);
        }
    }

    /**
     * @param \DateTime $HitDate
     *
     * @return EftBilling
     */
    public function setHitDate(\DateTime $HitDate = null)
    {
        if ($HitDate == null) {
            $this->HitDate = null;
        } else {
            $this->HitDate = $HitDate->format(\DateTime::ATOM);
        }

        return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param int $Id
     *
     * @return EftBilling
     */
    public function setId($Id)
    {
        $this->Id = $Id;

        return $this;
    }

    /**
     * @return BillingStatus
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param BillingStatus $Status
     *
     * @return EftBilling
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;

        return $this;
    }
}
