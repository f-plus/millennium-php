<?php

namespace FPlus\Millennium\Model;

class ScanHeader extends BaseDTO
{
    /**
     * @var bool
     */
    protected $AvailableOnFriday;

    /**
     * @var bool
     */
    protected $AvailableOnMonday;

    /**
     * @var bool
     */
    protected $AvailableOnSaturday;

    /**
     * @var bool
     */
    protected $AvailableOnSunday;

    /**
     * @var bool
     */
    protected $AvailableOnThursday;

    /**
     * @var bool
     */
    protected $AvailableOnTuesday;

    /**
     * @var bool
     */
    protected $AvailableOnWednesday;

    /**
     * @var \DateTime
     */
    protected $FromDateTime;

    /**
     * @var int
     */
    protected $MinimumHoursForBooking;

    /**
     * @var int
     */
    protected $NumberOfChoices;

    /**
     * @var ArrayOfScanDetail
     */
    protected $ScanDetails;

    /**
     * @var \DateTime
     */
    protected $ToDateTime;

    /**
     * @var bool
     */
    protected $UseExactOrder;

    /**
     * @var bool
     */
    protected $UseMasking;

    /**
     * @var int
     */
    protected $WaitTime;

    public function __construct()
    {
    }

    /**
     * @return bool
     */
    public function getAvailableOnFriday()
    {
        return $this->AvailableOnFriday;
    }

    /**
     * @param bool $AvailableOnFriday
     *
     * @return ScanHeader
     */
    public function setAvailableOnFriday($AvailableOnFriday)
    {
        $this->AvailableOnFriday = $AvailableOnFriday;

        return $this;
    }

    /**
     * @return bool
     */
    public function getAvailableOnMonday()
    {
        return $this->AvailableOnMonday;
    }

    /**
     * @param bool $AvailableOnMonday
     *
     * @return ScanHeader
     */
    public function setAvailableOnMonday($AvailableOnMonday)
    {
        $this->AvailableOnMonday = $AvailableOnMonday;

        return $this;
    }

    /**
     * @return bool
     */
    public function getAvailableOnSaturday()
    {
        return $this->AvailableOnSaturday;
    }

    /**
     * @param bool $AvailableOnSaturday
     *
     * @return ScanHeader
     */
    public function setAvailableOnSaturday($AvailableOnSaturday)
    {
        $this->AvailableOnSaturday = $AvailableOnSaturday;

        return $this;
    }

    /**
     * @return bool
     */
    public function getAvailableOnSunday()
    {
        return $this->AvailableOnSunday;
    }

    /**
     * @param bool $AvailableOnSunday
     *
     * @return ScanHeader
     */
    public function setAvailableOnSunday($AvailableOnSunday)
    {
        $this->AvailableOnSunday = $AvailableOnSunday;

        return $this;
    }

    /**
     * @return bool
     */
    public function getAvailableOnThursday()
    {
        return $this->AvailableOnThursday;
    }

    /**
     * @param bool $AvailableOnThursday
     *
     * @return ScanHeader
     */
    public function setAvailableOnThursday($AvailableOnThursday)
    {
        $this->AvailableOnThursday = $AvailableOnThursday;

        return $this;
    }

    /**
     * @return bool
     */
    public function getAvailableOnTuesday()
    {
        return $this->AvailableOnTuesday;
    }

    /**
     * @param bool $AvailableOnTuesday
     *
     * @return ScanHeader
     */
    public function setAvailableOnTuesday($AvailableOnTuesday)
    {
        $this->AvailableOnTuesday = $AvailableOnTuesday;

        return $this;
    }

    /**
     * @return bool
     */
    public function getAvailableOnWednesday()
    {
        return $this->AvailableOnWednesday;
    }

    /**
     * @param bool $AvailableOnWednesday
     *
     * @return ScanHeader
     */
    public function setAvailableOnWednesday($AvailableOnWednesday)
    {
        $this->AvailableOnWednesday = $AvailableOnWednesday;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFromDateTime()
    {
        if ($this->FromDateTime == null) {
            return null;
        } else {
            return new \DateTime($this->FromDateTime);
        }
    }

    /**
     * @param \DateTime $FromDateTime
     *
     * @return ScanHeader
     */
    public function setFromDateTime(\DateTime $FromDateTime = null)
    {
        if ($FromDateTime == null) {
            $this->FromDateTime = null;
        } else {
            $this->FromDateTime = $FromDateTime->format(\DateTime::ATOM);
        }

        return $this;
    }

    /**
     * @return int
     */
    public function getMinimumHoursForBooking()
    {
        return $this->MinimumHoursForBooking;
    }

    /**
     * @param int $MinimumHoursForBooking
     *
     * @return ScanHeader
     */
    public function setMinimumHoursForBooking($MinimumHoursForBooking)
    {
        $this->MinimumHoursForBooking = $MinimumHoursForBooking;

        return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfChoices()
    {
        return $this->NumberOfChoices;
    }

    /**
     * @param int $NumberOfChoices
     *
     * @return ScanHeader
     */
    public function setNumberOfChoices($NumberOfChoices)
    {
        $this->NumberOfChoices = $NumberOfChoices;

        return $this;
    }

    /**
     * @return ArrayOfScanDetail
     */
    public function getScanDetails()
    {
        return $this->ScanDetails;
    }

    /**
     * @param ArrayOfScanDetail $ScanDetails
     *
     * @return ScanHeader
     */
    public function setScanDetails($ScanDetails)
    {
        $this->ScanDetails = $ScanDetails;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getToDateTime()
    {
        if ($this->ToDateTime == null) {
            return null;
        } else {
            return new \DateTime($this->ToDateTime);
        }
    }

    /**
     * @param \DateTime $ToDateTime
     *
     * @return ScanHeader
     */
    public function setToDateTime(\DateTime $ToDateTime = null)
    {
        if ($ToDateTime == null) {
            $this->ToDateTime = null;
        } else {
            $this->ToDateTime = $ToDateTime->format(\DateTime::ATOM);
        }

        return $this;
    }

    /**
     * @return bool
     */
    public function getUseExactOrder()
    {
        return $this->UseExactOrder;
    }

    /**
     * @param bool $UseExactOrder
     *
     * @return ScanHeader
     */
    public function setUseExactOrder($UseExactOrder)
    {
        $this->UseExactOrder = $UseExactOrder;

        return $this;
    }

    /**
     * @return bool
     */
    public function getUseMasking()
    {
        return $this->UseMasking;
    }

    /**
     * @param bool $UseMasking
     *
     * @return ScanHeader
     */
    public function setUseMasking($UseMasking)
    {
        $this->UseMasking = $UseMasking;

        return $this;
    }

    /**
     * @return int
     */
    public function getWaitTime()
    {
        return $this->WaitTime;
    }

    /**
     * @param int $WaitTime
     *
     * @return ScanHeader
     */
    public function setWaitTime($WaitTime)
    {
        $this->WaitTime = $WaitTime;

        return $this;
    }
}
