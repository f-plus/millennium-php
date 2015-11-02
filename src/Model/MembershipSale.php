<?php

namespace FPlus\Millennium\Model;

class MembershipSale extends BaseDTO
{
    /**
     * @var \DateTime
     */
    protected $AutoRenewBegins;

    /**
     * @var AutoRenewType
     */
    protected $AutoRenewType;

    /**
     * @var BillingFrequency
     */
    protected $BillingFrequency;

    /**
     * @var MembershipBilling
     */
    protected $BillingType;

    /**
     * @var ArrayOfMembershipSaleDetail
     */
    protected $Details;

    /**
     * @var \DateTime
     */
    protected $ExpirationDate;

    /**
     * @var int
     */
    protected $Id;

    /**
     * @var string
     */
    protected $InvoiceNumber;

    /**
     * @var bool
     */
    protected $IsAutoRenew;

    /**
     * @var bool
     */
    protected $IsRefunded;

    /**
     * @var bool
     */
    protected $IsTaxable;

    /**
     * @var string
     */
    protected $MemberNumber;

    /**
     * @var int
     */
    protected $MembershipId;

    /**
     * @var string
     */
    protected $MembershipName;

    /**
     * @var MonthOrDay
     */
    protected $MonthOrDay;

    /**
     * @var int
     */
    protected $MonthOrDayLength;

    /**
     * @var float
     */
    protected $Price;

    /**
     * @var int
     */
    protected $TransactionHearderId;

    /**
     * @var ArrayOfstring
     */
    protected $UnlimitedServices;

    public function __construct()
    {
    }

    /**
     * @return \DateTime
     */
    public function getAutoRenewBegins()
    {
        if ($this->AutoRenewBegins == null) {
            return null;
        } else {
            return new \DateTime($this->AutoRenewBegins);
        }
    }

    /**
     * @param \DateTime $AutoRenewBegins
     *
     * @return MembershipSale
     */
    public function setAutoRenewBegins(\DateTime $AutoRenewBegins = null)
    {
        if ($AutoRenewBegins == null) {
            $this->AutoRenewBegins = null;
        } else {
            $this->AutoRenewBegins = $AutoRenewBegins->format(\DateTime::ATOM);
        }

        return $this;
    }

    /**
     * @return AutoRenewType
     */
    public function getAutoRenewType()
    {
        return $this->AutoRenewType;
    }

    /**
     * @param AutoRenewType $AutoRenewType
     *
     * @return MembershipSale
     */
    public function setAutoRenewType($AutoRenewType)
    {
        $this->AutoRenewType = $AutoRenewType;

        return $this;
    }

    /**
     * @return BillingFrequency
     */
    public function getBillingFrequency()
    {
        return $this->BillingFrequency;
    }

    /**
     * @param BillingFrequency $BillingFrequency
     *
     * @return MembershipSale
     */
    public function setBillingFrequency($BillingFrequency)
    {
        $this->BillingFrequency = $BillingFrequency;

        return $this;
    }

    /**
     * @return MembershipBilling
     */
    public function getBillingType()
    {
        return $this->BillingType;
    }

    /**
     * @param MembershipBilling $BillingType
     *
     * @return MembershipSale
     */
    public function setBillingType($BillingType)
    {
        $this->BillingType = $BillingType;

        return $this;
    }

    /**
     * @return ArrayOfMembershipSaleDetail
     */
    public function getDetails()
    {
        return $this->Details;
    }

    /**
     * @param ArrayOfMembershipSaleDetail $Details
     *
     * @return MembershipSale
     */
    public function setDetails($Details)
    {
        $this->Details = $Details;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpirationDate()
    {
        if ($this->ExpirationDate == null) {
            return null;
        } else {
            return new \DateTime($this->ExpirationDate);
        }
    }

    /**
     * @param \DateTime $ExpirationDate
     *
     * @return MembershipSale
     */
    public function setExpirationDate(\DateTime $ExpirationDate = null)
    {
        if ($ExpirationDate == null) {
            $this->ExpirationDate = null;
        } else {
            $this->ExpirationDate = $ExpirationDate->format(\DateTime::ATOM);
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
     * @return MembershipSale
     */
    public function setId($Id)
    {
        $this->Id = $Id;

        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->InvoiceNumber;
    }

    /**
     * @param string $InvoiceNumber
     *
     * @return MembershipSale
     */
    public function setInvoiceNumber($InvoiceNumber)
    {
        $this->InvoiceNumber = $InvoiceNumber;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsAutoRenew()
    {
        return $this->IsAutoRenew;
    }

    /**
     * @param bool $IsAutoRenew
     *
     * @return MembershipSale
     */
    public function setIsAutoRenew($IsAutoRenew)
    {
        $this->IsAutoRenew = $IsAutoRenew;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsRefunded()
    {
        return $this->IsRefunded;
    }

    /**
     * @param bool $IsRefunded
     *
     * @return MembershipSale
     */
    public function setIsRefunded($IsRefunded)
    {
        $this->IsRefunded = $IsRefunded;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsTaxable()
    {
        return $this->IsTaxable;
    }

    /**
     * @param bool $IsTaxable
     *
     * @return MembershipSale
     */
    public function setIsTaxable($IsTaxable)
    {
        $this->IsTaxable = $IsTaxable;

        return $this;
    }

    /**
     * @return string
     */
    public function getMemberNumber()
    {
        return $this->MemberNumber;
    }

    /**
     * @param string $MemberNumber
     *
     * @return MembershipSale
     */
    public function setMemberNumber($MemberNumber)
    {
        $this->MemberNumber = $MemberNumber;

        return $this;
    }

    /**
     * @return int
     */
    public function getMembershipId()
    {
        return $this->MembershipId;
    }

    /**
     * @param int $MembershipId
     *
     * @return MembershipSale
     */
    public function setMembershipId($MembershipId)
    {
        $this->MembershipId = $MembershipId;

        return $this;
    }

    /**
     * @return string
     */
    public function getMembershipName()
    {
        return $this->MembershipName;
    }

    /**
     * @param string $MembershipName
     *
     * @return MembershipSale
     */
    public function setMembershipName($MembershipName)
    {
        $this->MembershipName = $MembershipName;

        return $this;
    }

    /**
     * @return MonthOrDay
     */
    public function getMonthOrDay()
    {
        return $this->MonthOrDay;
    }

    /**
     * @param MonthOrDay $MonthOrDay
     *
     * @return MembershipSale
     */
    public function setMonthOrDay($MonthOrDay)
    {
        $this->MonthOrDay = $MonthOrDay;

        return $this;
    }

    /**
     * @return int
     */
    public function getMonthOrDayLength()
    {
        return $this->MonthOrDayLength;
    }

    /**
     * @param int $MonthOrDayLength
     *
     * @return MembershipSale
     */
    public function setMonthOrDayLength($MonthOrDayLength)
    {
        $this->MonthOrDayLength = $MonthOrDayLength;

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
     * @return MembershipSale
     */
    public function setPrice($Price)
    {
        $this->Price = $Price;

        return $this;
    }

    /**
     * @return int
     */
    public function getTransactionHearderId()
    {
        return $this->TransactionHearderId;
    }

    /**
     * @param int $TransactionHearderId
     *
     * @return MembershipSale
     */
    public function setTransactionHearderId($TransactionHearderId)
    {
        $this->TransactionHearderId = $TransactionHearderId;

        return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getUnlimitedServices()
    {
        return $this->UnlimitedServices;
    }

    /**
     * @param ArrayOfstring $UnlimitedServices
     *
     * @return MembershipSale
     */
    public function setUnlimitedServices($UnlimitedServices)
    {
        $this->UnlimitedServices = $UnlimitedServices;

        return $this;
    }
}
