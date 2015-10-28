<?php

namespace FPlus\Millennium\Model;

class MembershipSale extends BaseDTO
{
    /**
     * @var \DateTime
     */
    protected $AutoRenewBegins = null;

    /**
     * @var AutoRenewType
     */
    protected $AutoRenewType = null;

    /**
     * @var BillingFrequency
     */
    protected $BillingFrequency = null;

    /**
     * @var MembershipBilling
     */
    protected $BillingType = null;

    /**
     * @var ArrayOfMembershipSaleDetail
     */
    protected $Details = null;

    /**
     * @var \DateTime
     */
    protected $ExpirationDate = null;

    /**
     * @var int
     */
    protected $Id = null;

    /**
     * @var string
     */
    protected $InvoiceNumber = null;

    /**
     * @var bool
     */
    protected $IsAutoRenew = null;

    /**
     * @var bool
     */
    protected $IsRefunded = null;

    /**
     * @var bool
     */
    protected $IsTaxable = null;

    /**
     * @var string
     */
    protected $MemberNumber = null;

    /**
     * @var int
     */
    protected $MembershipId = null;

    /**
     * @var string
     */
    protected $MembershipName = null;

    /**
     * @var MonthOrDay
     */
    protected $MonthOrDay = null;

    /**
     * @var int
     */
    protected $MonthOrDayLength = null;

    /**
     * @var float
     */
    protected $Price = null;

    /**
     * @var int
     */
    protected $TransactionHearderId = null;

    /**
     * @var ArrayOfstring
     */
    protected $UnlimitedServices = null;

    public function __construct()
    {
    }

    /**
     * @return \DateTime
     */
    public function getAutoRenewBegins()
    {
        if ($this->AutoRenewBegins == null) {
            return;
        } else {
            try {
                return new \DateTime($this->AutoRenewBegins);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $AutoRenewBegins
     *
     * @return \Millennium\Soap\MembershipSale
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
     * @return \Millennium\Soap\MembershipSale
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
     * @return \Millennium\Soap\MembershipSale
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
     * @return \Millennium\Soap\MembershipSale
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
     * @return \Millennium\Soap\MembershipSale
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
            return;
        } else {
            try {
                return new \DateTime($this->ExpirationDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ExpirationDate
     *
     * @return \Millennium\Soap\MembershipSale
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
     * @return \Millennium\Soap\MembershipSale
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
     * @return \Millennium\Soap\MembershipSale
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
     * @return \Millennium\Soap\MembershipSale
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
     * @return \Millennium\Soap\MembershipSale
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
     * @return \Millennium\Soap\MembershipSale
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
     * @return \Millennium\Soap\MembershipSale
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
     * @return \Millennium\Soap\MembershipSale
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
     * @return \Millennium\Soap\MembershipSale
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
     * @return \Millennium\Soap\MembershipSale
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
     * @return \Millennium\Soap\MembershipSale
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
     * @return \Millennium\Soap\MembershipSale
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
     * @return \Millennium\Soap\MembershipSale
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
     * @return \Millennium\Soap\MembershipSale
     */
    public function setUnlimitedServices($UnlimitedServices)
    {
        $this->UnlimitedServices = $UnlimitedServices;

        return $this;
    }
}
