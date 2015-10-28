<?php

namespace FPlus\Millennium\Model;

class EftBilling extends BaseDTO
{
    /**
     * @var float
     */
    protected $Amount = null;

    /**
     * @var \DateTime
     */
    protected $HitDate = null;

    /**
     * @var int
     */
    protected $Id = null;

    /**
     * @var BillingStatus
     */
    protected $Status = null;

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
     * @return \Millennium\Soap\EftBilling
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
            return;
        } else {
            try {
                return new \DateTime($this->HitDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $HitDate
     *
     * @return \Millennium\Soap\EftBilling
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
     * @return \Millennium\Soap\EftBilling
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
     * @return \Millennium\Soap\EftBilling
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;

        return $this;
    }
}