<?php

namespace FPlus\Millennium\Model;

class GC extends BaseDTO
{
    /**
     * @var float
     */
    protected $AmountLeft;

    /**
     * @var int
     */
    protected $EmployeeId;

    /**
     * @var \DateTime
     */
    protected $ExpiresOn;

    /**
     * @var string
     */
    protected $GCNumber;

    /**
     * @var int
     */
    protected $GCTypeId;

    /**
     * @var int
     */
    protected $Id;

    /**
     * @var string
     */
    protected $Notes;

    /**
     * @var float
     */
    protected $OriginAmount;

    /**
     * @var float
     */
    protected $Price;

    /**
     * @var int
     */
    protected $PurchById;

    /**
     * @var int
     */
    protected $PurchForId;

    /**
     * @var int
     */
    protected $ReferralId;

    /**
     * @var float
     */
    protected $TipAmount;

    /**
     * @var float
     */
    protected $TipRemaining;

    /**
     * @var \DateTime
     */
    protected $ValidFrom;

    public function __construct()
    {
    }

    /**
     * @return float
     */
    public function getAmountLeft()
    {
        return $this->AmountLeft;
    }

    /**
     * @param float $AmountLeft
     *
     * @return GC
     */
    public function setAmountLeft($AmountLeft)
    {
        $this->AmountLeft = $AmountLeft;

        return $this;
    }

    /**
     * @return int
     */
    public function getEmployeeId()
    {
        return $this->EmployeeId;
    }

    /**
     * @param int $EmployeeId
     *
     * @return GC
     */
    public function setEmployeeId($EmployeeId)
    {
        $this->EmployeeId = $EmployeeId;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpiresOn()
    {
        if ($this->ExpiresOn == null) {
            return null;
        } else {
            return new \DateTime($this->ExpiresOn);
        }
    }

    /**
     * @param \DateTime $ExpiresOn
     *
     * @return GC
     */
    public function setExpiresOn(\DateTime $ExpiresOn = null)
    {
        if ($ExpiresOn == null) {
            $this->ExpiresOn = null;
        } else {
            $this->ExpiresOn = $ExpiresOn->format(\DateTime::ATOM);
        }

        return $this;
    }

    /**
     * @return string
     */
    public function getGCNumber()
    {
        return $this->GCNumber;
    }

    /**
     * @param string $GCNumber
     *
     * @return GC
     */
    public function setGCNumber($GCNumber)
    {
        $this->GCNumber = $GCNumber;

        return $this;
    }

    /**
     * @return int
     */
    public function getGCTypeId()
    {
        return $this->GCTypeId;
    }

    /**
     * @param int $GCTypeId
     *
     * @return GC
     */
    public function setGCTypeId($GCTypeId)
    {
        $this->GCTypeId = $GCTypeId;

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
     * @return GC
     */
    public function setId($Id)
    {
        $this->Id = $Id;

        return $this;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->Notes;
    }

    /**
     * @param string $Notes
     *
     * @return GC
     */
    public function setNotes($Notes)
    {
        $this->Notes = $Notes;

        return $this;
    }

    /**
     * @return float
     */
    public function getOriginAmount()
    {
        return $this->OriginAmount;
    }

    /**
     * @param float $OriginAmount
     *
     * @return GC
     */
    public function setOriginAmount($OriginAmount)
    {
        $this->OriginAmount = $OriginAmount;

        return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * @param float $Price
     *
     * @return GC
     */
    public function setPrice($Price)
    {
        $this->Price = $Price;

        return $this;
    }

    /**
     * @return int
     */
    public function getPurchById()
    {
        return $this->PurchById;
    }

    /**
     * @param int $PurchById
     *
     * @return GC
     */
    public function setPurchById($PurchById)
    {
        $this->PurchById = $PurchById;

        return $this;
    }

    /**
     * @return int
     */
    public function getPurchForId()
    {
        return $this->PurchForId;
    }

    /**
     * @param int $PurchForId
     *
     * @return GC
     */
    public function setPurchForId($PurchForId)
    {
        $this->PurchForId = $PurchForId;

        return $this;
    }

    /**
     * @return int
     */
    public function getReferralId()
    {
        return $this->ReferralId;
    }

    /**
     * @param int $ReferralId
     *
     * @return GC
     */
    public function setReferralId($ReferralId)
    {
        $this->ReferralId = $ReferralId;

        return $this;
    }

    /**
     * @return float
     */
    public function getTipAmount()
    {
        return $this->TipAmount;
    }

    /**
     * @param float $TipAmount
     *
     * @return GC
     */
    public function setTipAmount($TipAmount)
    {
        $this->TipAmount = $TipAmount;

        return $this;
    }

    /**
     * @return float
     */
    public function getTipRemaining()
    {
        return $this->TipRemaining;
    }

    /**
     * @param float $TipRemaining
     *
     * @return GC
     */
    public function setTipRemaining($TipRemaining)
    {
        $this->TipRemaining = $TipRemaining;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getValidFrom()
    {
        if ($this->ValidFrom == null) {
            return null;
        } else {
            return new \DateTime($this->ValidFrom);
        }
    }

    /**
     * @param \DateTime $ValidFrom
     *
     * @return GC
     */
    public function setValidFrom(\DateTime $ValidFrom = null)
    {
        if ($ValidFrom == null) {
            $this->ValidFrom = null;
        } else {
            $this->ValidFrom = $ValidFrom->format(\DateTime::ATOM);
        }

        return $this;
    }
}
