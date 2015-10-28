<?php

namespace FPlus\Millennium\Model;

class MembershipSaleDetail extends BaseDTO
{
    /**
     * @var BillingType
     */
    protected $BillingType = null;

    /**
     * @var \DateTime
     */
    protected $CancelDate = null;

    /**
     * @var ArrayOfEftBilling
     */
    protected $Efts = null;

    /**
     * @var float
     */
    protected $EnrollmentFee = null;

    /**
     * @var bool
     */
    protected $HasRetailDiscountsOnFriday = null;

    /**
     * @var bool
     */
    protected $HasRetailDiscountsOnMonday = null;

    /**
     * @var bool
     */
    protected $HasRetailDiscountsOnSaturday = null;

    /**
     * @var bool
     */
    protected $HasRetailDiscountsOnSunday = null;

    /**
     * @var bool
     */
    protected $HasRetailDiscountsOnThursday = null;

    /**
     * @var bool
     */
    protected $HasRetailDiscountsOnTuesday = null;

    /**
     * @var bool
     */
    protected $HasRetailDiscountsOnWednesday = null;

    /**
     * @var bool
     */
    protected $HasServiceDiscountsOnFriday = null;

    /**
     * @var bool
     */
    protected $HasServiceDiscountsOnMonday = null;

    /**
     * @var bool
     */
    protected $HasServiceDiscountsOnSaturday = null;

    /**
     * @var bool
     */
    protected $HasServiceDiscountsOnSunday = null;

    /**
     * @var bool
     */
    protected $HasServiceDiscountsOnThursday = null;

    /**
     * @var bool
     */
    protected $HasServiceDiscountsOnTuesday = null;

    /**
     * @var bool
     */
    protected $HasServiceDiscountsOnWednesday = null;

    /**
     * @var int
     */
    protected $Id = null;

    /**
     * @var bool
     */
    protected $IsFrozen = null;

    /**
     * @var bool
     */
    protected $IsGloballyRedeemable = null;

    /**
     * @var bool
     */
    protected $IsSuspended = null;

    /**
     * @var string
     */
    protected $Last4Account = null;

    /**
     * @var string
     */
    protected $Last4CreditCard = null;

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
    protected $PackageDiscount = null;

    /**
     * @var float
     */
    protected $RecurFee = null;

    /**
     * @var float
     */
    protected $RetailDiscount = null;

    /**
     * @var float
     */
    protected $ServiceDiscount = null;

    /**
     * @var float
     */
    protected $TanningDiscount = null;

    /**
     * @var \DateTime
     */
    protected $TerminationDate = null;

    public function __construct()
    {
    }

    /**
     * @return BillingType
     */
    public function getBillingType()
    {
        return $this->BillingType;
    }

    /**
     * @param BillingType $BillingType
     *
     * @return \Millennium\Soap\MembershipSaleDetail
     */
    public function setBillingType($BillingType)
    {
        $this->BillingType = $BillingType;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCancelDate()
    {
        if ($this->CancelDate == null) {
            return;
        } else {
            try {
                return new \DateTime($this->CancelDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $CancelDate
     *
     * @return \Millennium\Soap\MembershipSaleDetail
     */
    public function setCancelDate(\DateTime $CancelDate = null)
    {
        if ($CancelDate == null) {
            $this->CancelDate = null;
        } else {
            $this->CancelDate = $CancelDate->format(\DateTime::ATOM);
        }

        return $this;
    }

    /**
     * @return ArrayOfEftBilling
     */
    public function getEfts()
    {
        return $this->Efts;
    }

    /**
     * @param ArrayOfEftBilling $Efts
     *
     * @return \Millennium\Soap\MembershipSaleDetail
     */
    public function setEfts($Efts)
    {
        $this->Efts = $Efts;

        return $this;
    }

    /**
     * @return float
     */
    public function getEnrollmentFee()
    {
        return $this->EnrollmentFee;
    }

    /**
     * @param float $EnrollmentFee
     *
     * @return \Millennium\Soap\MembershipSaleDetail
     */
    public function setEnrollmentFee($EnrollmentFee)
    {
        $this->EnrollmentFee = $EnrollmentFee;

        return $this;
    }

    /**
     * @return bool
     */
    public function getHasRetailDiscountsOnFriday()
    {
        return $this->HasRetailDiscountsOnFriday;
    }

    /**
     * @param bool $HasRetailDiscountsOnFriday
     *
     * @return \Millennium\Soap\MembershipSaleDetail
     */
    public function setHasRetailDiscountsOnFriday($HasRetailDiscountsOnFriday)
    {
        $this->HasRetailDiscountsOnFriday = $HasRetailDiscountsOnFriday;

        return $this;
    }

    /**
     * @return bool
     */
    public function getHasRetailDiscountsOnMonday()
    {
        return $this->HasRetailDiscountsOnMonday;
    }

    /**
     * @param bool $HasRetailDiscountsOnMonday
     *
     * @return \Millennium\Soap\MembershipSaleDetail
     */
    public function setHasRetailDiscountsOnMonday($HasRetailDiscountsOnMonday)
    {
        $this->HasRetailDiscountsOnMonday = $HasRetailDiscountsOnMonday;

        return $this;
    }

    /**
     * @return bool
     */
    public function getHasRetailDiscountsOnSaturday()
    {
        return $this->HasRetailDiscountsOnSaturday;
    }

    /**
     * @param bool $HasRetailDiscountsOnSaturday
     *
     * @return \Millennium\Soap\MembershipSaleDetail
     */
    public function setHasRetailDiscountsOnSaturday($HasRetailDiscountsOnSaturday)
    {
        $this->HasRetailDiscountsOnSaturday = $HasRetailDiscountsOnSaturday;

        return $this;
    }

    /**
     * @return bool
     */
    public function getHasRetailDiscountsOnSunday()
    {
        return $this->HasRetailDiscountsOnSunday;
    }

    /**
     * @param bool $HasRetailDiscountsOnSunday
     *
     * @return \Millennium\Soap\MembershipSaleDetail
     */
    public function setHasRetailDiscountsOnSunday($HasRetailDiscountsOnSunday)
    {
        $this->HasRetailDiscountsOnSunday = $HasRetailDiscountsOnSunday;

        return $this;
    }

    /**
     * @return bool
     */
    public function getHasRetailDiscountsOnThursday()
    {
        return $this->HasRetailDiscountsOnThursday;
    }

    /**
     * @param bool $HasRetailDiscountsOnThursday
     *
     * @return \Millennium\Soap\MembershipSaleDetail
     */
    public function setHasRetailDiscountsOnThursday($HasRetailDiscountsOnThursday)
    {
        $this->HasRetailDiscountsOnThursday = $HasRetailDiscountsOnThursday;

        return $this;
    }

    /**
     * @return bool
     */
    public function getHasRetailDiscountsOnTuesday()
    {
        return $this->HasRetailDiscountsOnTuesday;
    }

    /**
     * @param bool $HasRetailDiscountsOnTuesday
     *
     * @return \Millennium\Soap\MembershipSaleDetail
     */
    public function setHasRetailDiscountsOnTuesday($HasRetailDiscountsOnTuesday)
    {
        $this->HasRetailDiscountsOnTuesday = $HasRetailDiscountsOnTuesday;

        return $this;
    }

    /**
     * @return bool
     */
    public function getHasRetailDiscountsOnWednesday()
    {
        return $this->HasRetailDiscountsOnWednesday;
    }

    /**
     * @param bool $HasRetailDiscountsOnWednesday
     *
     * @return \Millennium\Soap\MembershipSaleDetail
     */
    public function setHasRetailDiscountsOnWednesday($HasRetailDiscountsOnWednesday)
    {
        $this->HasRetailDiscountsOnWednesday = $HasRetailDiscountsOnWednesday;

        return $this;
    }

    /**
     * @return bool
     */
    public function getHasServiceDiscountsOnFriday()
    {
        return $this->HasServiceDiscountsOnFriday;
    }

    /**
     * @param bool $HasServiceDiscountsOnFriday
     *
     * @return \Millennium\Soap\MembershipSaleDetail
     */
    public function setHasServiceDiscountsOnFriday($HasServiceDiscountsOnFriday)
    {
        $this->HasServiceDiscountsOnFriday = $HasServiceDiscountsOnFriday;

        return $this;
    }

    /**
     * @return bool
     */
    public function getHasServiceDiscountsOnMonday()
    {
        return $this->HasServiceDiscountsOnMonday;
    }

    /**
     * @param bool $HasServiceDiscountsOnMonday
     *
     * @return \Millennium\Soap\MembershipSaleDetail
     */
    public function setHasServiceDiscountsOnMonday($HasServiceDiscountsOnMonday)
    {
        $this->HasServiceDiscountsOnMonday = $HasServiceDiscountsOnMonday;

        return $this;
    }

    /**
     * @return bool
     */
    public function getHasServiceDiscountsOnSaturday()
    {
        return $this->HasServiceDiscountsOnSaturday;
    }

    /**
     * @param bool $HasServiceDiscountsOnSaturday
     *
     * @return \Millennium\Soap\MembershipSaleDetail
     */
    public function setHasServiceDiscountsOnSaturday($HasServiceDiscountsOnSaturday)
    {
        $this->HasServiceDiscountsOnSaturday = $HasServiceDiscountsOnSaturday;

        return $this;
    }

    /**
     * @return bool
     */
    public function getHasServiceDiscountsOnSunday()
    {
        return $this->HasServiceDiscountsOnSunday;
    }

    /**
     * @param bool $HasServiceDiscountsOnSunday
     *
     * @return \Millennium\Soap\MembershipSaleDetail
     */
    public function setHasServiceDiscountsOnSunday($HasServiceDiscountsOnSunday)
    {
        $this->HasServiceDiscountsOnSunday = $HasServiceDiscountsOnSunday;

        return $this;
    }

    /**
     * @return bool
     */
    public function getHasServiceDiscountsOnThursday()
    {
        return $this->HasServiceDiscountsOnThursday;
    }

    /**
     * @param bool $HasServiceDiscountsOnThursday
     *
     * @return \Millennium\Soap\MembershipSaleDetail
     */
    public function setHasServiceDiscountsOnThursday($HasServiceDiscountsOnThursday)
    {
        $this->HasServiceDiscountsOnThursday = $HasServiceDiscountsOnThursday;

        return $this;
    }

    /**
     * @return bool
     */
    public function getHasServiceDiscountsOnTuesday()
    {
        return $this->HasServiceDiscountsOnTuesday;
    }

    /**
     * @param bool $HasServiceDiscountsOnTuesday
     *
     * @return \Millennium\Soap\MembershipSaleDetail
     */
    public function setHasServiceDiscountsOnTuesday($HasServiceDiscountsOnTuesday)
    {
        $this->HasServiceDiscountsOnTuesday = $HasServiceDiscountsOnTuesday;

        return $this;
    }

    /**
     * @return bool
     */
    public function getHasServiceDiscountsOnWednesday()
    {
        return $this->HasServiceDiscountsOnWednesday;
    }

    /**
     * @param bool $HasServiceDiscountsOnWednesday
     *
     * @return \Millennium\Soap\MembershipSaleDetail
     */
    public function setHasServiceDiscountsOnWednesday($HasServiceDiscountsOnWednesday)
    {
        $this->HasServiceDiscountsOnWednesday = $HasServiceDiscountsOnWednesday;

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
     * @return \Millennium\Soap\MembershipSaleDetail
     */
    public function setId($Id)
    {
        $this->Id = $Id;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsFrozen()
    {
        return $this->IsFrozen;
    }

    /**
     * @param bool $IsFrozen
     *
     * @return \Millennium\Soap\MembershipSaleDetail
     */
    public function setIsFrozen($IsFrozen)
    {
        $this->IsFrozen = $IsFrozen;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsGloballyRedeemable()
    {
        return $this->IsGloballyRedeemable;
    }

    /**
     * @param bool $IsGloballyRedeemable
     *
     * @return \Millennium\Soap\MembershipSaleDetail
     */
    public function setIsGloballyRedeemable($IsGloballyRedeemable)
    {
        $this->IsGloballyRedeemable = $IsGloballyRedeemable;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsSuspended()
    {
        return $this->IsSuspended;
    }

    /**
     * @param bool $IsSuspended
     *
     * @return \Millennium\Soap\MembershipSaleDetail
     */
    public function setIsSuspended($IsSuspended)
    {
        $this->IsSuspended = $IsSuspended;

        return $this;
    }

    /**
     * @return string
     */
    public function getLast4Account()
    {
        return $this->Last4Account;
    }

    /**
     * @param string $Last4Account
     *
     * @return \Millennium\Soap\MembershipSaleDetail
     */
    public function setLast4Account($Last4Account)
    {
        $this->Last4Account = $Last4Account;

        return $this;
    }

    /**
     * @return string
     */
    public function getLast4CreditCard()
    {
        return $this->Last4CreditCard;
    }

    /**
     * @param string $Last4CreditCard
     *
     * @return \Millennium\Soap\MembershipSaleDetail
     */
    public function setLast4CreditCard($Last4CreditCard)
    {
        $this->Last4CreditCard = $Last4CreditCard;

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
     * @return \Millennium\Soap\MembershipSaleDetail
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
     * @return \Millennium\Soap\MembershipSaleDetail
     */
    public function setMonthOrDayLength($MonthOrDayLength)
    {
        $this->MonthOrDayLength = $MonthOrDayLength;

        return $this;
    }

    /**
     * @return float
     */
    public function getPackageDiscount()
    {
        return $this->PackageDiscount;
    }

    /**
     * @param float $PackageDiscount
     *
     * @return \Millennium\Soap\MembershipSaleDetail
     */
    public function setPackageDiscount($PackageDiscount)
    {
        $this->PackageDiscount = $PackageDiscount;

        return $this;
    }

    /**
     * @return float
     */
    public function getRecurFee()
    {
        return $this->RecurFee;
    }

    /**
     * @param float $RecurFee
     *
     * @return \Millennium\Soap\MembershipSaleDetail
     */
    public function setRecurFee($RecurFee)
    {
        $this->RecurFee = $RecurFee;

        return $this;
    }

    /**
     * @return float
     */
    public function getRetailDiscount()
    {
        return $this->RetailDiscount;
    }

    /**
     * @param float $RetailDiscount
     *
     * @return \Millennium\Soap\MembershipSaleDetail
     */
    public function setRetailDiscount($RetailDiscount)
    {
        $this->RetailDiscount = $RetailDiscount;

        return $this;
    }

    /**
     * @return float
     */
    public function getServiceDiscount()
    {
        return $this->ServiceDiscount;
    }

    /**
     * @param float $ServiceDiscount
     *
     * @return \Millennium\Soap\MembershipSaleDetail
     */
    public function setServiceDiscount($ServiceDiscount)
    {
        $this->ServiceDiscount = $ServiceDiscount;

        return $this;
    }

    /**
     * @return float
     */
    public function getTanningDiscount()
    {
        return $this->TanningDiscount;
    }

    /**
     * @param float $TanningDiscount
     *
     * @return \Millennium\Soap\MembershipSaleDetail
     */
    public function setTanningDiscount($TanningDiscount)
    {
        $this->TanningDiscount = $TanningDiscount;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTerminationDate()
    {
        if ($this->TerminationDate == null) {
            return;
        } else {
            try {
                return new \DateTime($this->TerminationDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $TerminationDate
     *
     * @return \Millennium\Soap\MembershipSaleDetail
     */
    public function setTerminationDate(\DateTime $TerminationDate = null)
    {
        if ($TerminationDate == null) {
            $this->TerminationDate = null;
        } else {
            $this->TerminationDate = $TerminationDate->format(\DateTime::ATOM);
        }

        return $this;
    }
}
