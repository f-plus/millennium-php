<?php

namespace FPlus\Millennium\Model;

class ScanHeader extends BaseDTO
{
    /**
     * @var bool
     */
    protected $AvailableOnFriday = null;

    /**
     * @var bool
     */
    protected $AvailableOnMonday = null;

    /**
     * @var bool
     */
    protected $AvailableOnSaturday = null;

    /**
     * @var bool
     */
    protected $AvailableOnSunday = null;

    /**
     * @var bool
     */
    protected $AvailableOnThursday = null;

    /**
     * @var bool
     */
    protected $AvailableOnTuesday = null;

    /**
     * @var bool
     */
    protected $AvailableOnWednesday = null;

    /**
     * @var \DateTime
     */
    protected $FromDateTime = null;

    /**
     * @var int
     */
    protected $MinimumHoursForBooking = null;

    /**
     * @var int
     */
    protected $NumberOfChoices = null;

    /**
     * @var ArrayOfScanDetail
     */
    protected $ScanDetails = null;

    /**
     * @var \DateTime
     */
    protected $ToDateTime = null;

    /**
     * @var bool
     */
    protected $UseExactOrder = null;

    /**
     * @var bool
     */
    protected $UseMasking = null;

    /**
     * @var int
     */
    protected $WaitTime = null;

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
     * @return \Millennium\Soap\ScanHeader
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
     * @return \Millennium\Soap\ScanHeader
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
     * @return \Millennium\Soap\ScanHeader
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
     * @return \Millennium\Soap\ScanHeader
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
     * @return \Millennium\Soap\ScanHeader
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
     * @return \Millennium\Soap\ScanHeader
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
     * @return \Millennium\Soap\ScanHeader
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
            return;
        } else {
            try {
                return new \DateTime($this->FromDateTime);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $FromDateTime
     *
     * @return \Millennium\Soap\ScanHeader
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
     * @return \Millennium\Soap\ScanHeader
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
     * @return \Millennium\Soap\ScanHeader
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
     * @return \Millennium\Soap\ScanHeader
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
            return;
        } else {
            try {
                return new \DateTime($this->ToDateTime);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ToDateTime
     *
     * @return \Millennium\Soap\ScanHeader
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
     * @return \Millennium\Soap\ScanHeader
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
     * @return \Millennium\Soap\ScanHeader
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
     * @return \Millennium\Soap\ScanHeader
     */
    public function setWaitTime($WaitTime)
    {
        $this->WaitTime = $WaitTime;

        return $this;
    }
}
