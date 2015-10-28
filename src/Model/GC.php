<?php

namespace FPlus\Millennium\Model;

class GC extends BaseDTO
{
    /**
     * @var float
     */
    protected $AmountLeft = null;

    /**
     * @var int
     */
    protected $EmployeeId = null;

    /**
     * @var \DateTime
     */
    protected $ExpiresOn = null;

    /**
     * @var string
     */
    protected $GCNumber = null;

    /**
     * @var int
     */
    protected $GCTypeId = null;

    /**
     * @var int
     */
    protected $Id = null;

    /**
     * @var string
     */
    protected $Notes = null;

    /**
     * @var float
     */
    protected $OriginAmount = null;

    /**
     * @var float
     */
    protected $Price = null;

    /**
     * @var int
     */
    protected $PurchById = null;

    /**
     * @var int
     */
    protected $PurchForId = null;

    /**
     * @var int
     */
    protected $ReferralId = null;

    /**
     * @var float
     */
    protected $TipAmount = null;

    /**
     * @var float
     */
    protected $TipRemaining = null;

    /**
     * @var \DateTime
     */
    protected $ValidFrom = null;

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
     * @return \Millennium\Soap\GC
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
     * @return \Millennium\Soap\GC
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
            return;
        } else {
            try {
                return new \DateTime($this->ExpiresOn);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ExpiresOn
     *
     * @return \Millennium\Soap\GC
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
     * @return \Millennium\Soap\GC
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
     * @return \Millennium\Soap\GC
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
     * @return \Millennium\Soap\GC
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
     * @return \Millennium\Soap\GC
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
     * @return \Millennium\Soap\GC
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
     * @return \Millennium\Soap\GC
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
     * @return \Millennium\Soap\GC
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
     * @return \Millennium\Soap\GC
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
     * @return \Millennium\Soap\GC
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
     * @return \Millennium\Soap\GC
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
     * @return \Millennium\Soap\GC
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
            return;
        } else {
            try {
                return new \DateTime($this->ValidFrom);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ValidFrom
     *
     * @return \Millennium\Soap\GC
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
