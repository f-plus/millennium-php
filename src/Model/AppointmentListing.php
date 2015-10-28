<?php

namespace FPlus\Millennium\Model;

class AppointmentListing
{
    /**
     * @var \DateTime
     */
    protected $AppointmentDate = null;

    /**
     * @var int
     */
    protected $AppointmentDetailId = null;

    /**
     * @var string
     */
    protected $AppointmentType = null;

    /**
     * @var int
     */
    protected $AppointmentTypeId = null;

    /**
     * @var int
     */
    protected $BookedByLoginId = null;

    /**
     * @var \DateTime
     */
    protected $BookedOn = null;

    /**
     * @var bool
     */
    protected $BookedOnLine = null;

    /**
     * @var bool
     */
    protected $ChargeApptToRoom = null;

    /**
     * @var string
     */
    protected $CheckInTime = null;

    /**
     * @var string
     */
    protected $CheckOutTime = null;

    /**
     * @var string
     */
    protected $Client = null;

    /**
     * @var int
     */
    protected $ClientId = null;

    /**
     * @var string
     */
    protected $ConfirmationTypes = null;

    /**
     * @var string
     */
    protected $Employee = null;

    /**
     * @var int
     */
    protected $EmployeeId = null;

    /**
     * @var string
     */
    protected $EmployeeImageUrl = null;

    /**
     * @var float
     */
    protected $FinishLength = null;

    /**
     * @var float
     */
    protected $GapLength = null;

    /**
     * @var string
     */
    protected $Gender = null;

    /**
     * @var int
     */
    protected $Genderid = null;

    /**
     * @var bool
     */
    protected $HasCheckedIn = null;

    /**
     * @var int
     */
    protected $Id = null;

    /**
     * @var bool
     */
    protected $IsClass = null;

    /**
     * @var bool
     */
    protected $IsNoShow = null;

    /**
     * @var bool
     */
    protected $IsRunningLate = null;

    /**
     * @var \DateTime
     */
    protected $LastChanged = null;

    /**
     * @var int
     */
    protected $LastChangedByLoginId = null;

    /**
     * @var string
     */
    protected $Notes = null;

    /**
     * @var string
     */
    protected $PayingClient = null;

    /**
     * @var int
     */
    protected $PayingClientId = null;

    /**
     * @var bool
     */
    protected $PreBook = null;

    /**
     * @var string
     */
    protected $Resource = null;

    /**
     * @var int
     */
    protected $ResourceId = null;

    /**
     * @var string
     */
    protected $Service = null;

    /**
     * @var int
     */
    protected $ServiceId = null;

    /**
     * @var string
     */
    protected $ServiceImageUrl = null;

    /**
     * @var float
     */
    protected $ServicePrice = null;

    /**
     * @var int
     */
    protected $StandingHeaderId = null;

    /**
     * @var float
     */
    protected $StartLength = null;

    /**
     * @var \DateTime
     */
    protected $StartTime = null;

    public function __construct()
    {
    }

    /**
     * @return \DateTime
     */
    public function getAppointmentDate()
    {
        if ($this->AppointmentDate == null) {
            return;
        } else {
            try {
                return new \DateTime($this->AppointmentDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $AppointmentDate
     *
     * @return \Millennium\Soap\AppointmentListing
     */
    public function setAppointmentDate(\DateTime $AppointmentDate = null)
    {
        if ($AppointmentDate == null) {
            $this->AppointmentDate = null;
        } else {
            $this->AppointmentDate = $AppointmentDate->format(\DateTime::ATOM);
        }

        return $this;
    }

    /**
     * @return int
     */
    public function getAppointmentDetailId()
    {
        return $this->AppointmentDetailId;
    }

    /**
     * @param int $AppointmentDetailId
     *
     * @return \Millennium\Soap\AppointmentListing
     */
    public function setAppointmentDetailId($AppointmentDetailId)
    {
        $this->AppointmentDetailId = $AppointmentDetailId;

        return $this;
    }

    /**
     * @return string
     */
    public function getAppointmentType()
    {
        return $this->AppointmentType;
    }

    /**
     * @param string $AppointmentType
     *
     * @return \Millennium\Soap\AppointmentListing
     */
    public function setAppointmentType($AppointmentType)
    {
        $this->AppointmentType = $AppointmentType;

        return $this;
    }

    /**
     * @return int
     */
    public function getAppointmentTypeId()
    {
        return $this->AppointmentTypeId;
    }

    /**
     * @param int $AppointmentTypeId
     *
     * @return \Millennium\Soap\AppointmentListing
     */
    public function setAppointmentTypeId($AppointmentTypeId)
    {
        $this->AppointmentTypeId = $AppointmentTypeId;

        return $this;
    }

    /**
     * @return int
     */
    public function getBookedByLoginId()
    {
        return $this->BookedByLoginId;
    }

    /**
     * @param int $BookedByLoginId
     *
     * @return \Millennium\Soap\AppointmentListing
     */
    public function setBookedByLoginId($BookedByLoginId)
    {
        $this->BookedByLoginId = $BookedByLoginId;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBookedOn()
    {
        if ($this->BookedOn == null) {
            return;
        } else {
            try {
                return new \DateTime($this->BookedOn);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $BookedOn
     *
     * @return \Millennium\Soap\AppointmentListing
     */
    public function setBookedOn(\DateTime $BookedOn = null)
    {
        if ($BookedOn == null) {
            $this->BookedOn = null;
        } else {
            $this->BookedOn = $BookedOn->format(\DateTime::ATOM);
        }

        return $this;
    }

    /**
     * @return bool
     */
    public function getBookedOnLine()
    {
        return $this->BookedOnLine;
    }

    /**
     * @param bool $BookedOnLine
     *
     * @return \Millennium\Soap\AppointmentListing
     */
    public function setBookedOnLine($BookedOnLine)
    {
        $this->BookedOnLine = $BookedOnLine;

        return $this;
    }

    /**
     * @return bool
     */
    public function getChargeApptToRoom()
    {
        return $this->ChargeApptToRoom;
    }

    /**
     * @param bool $ChargeApptToRoom
     *
     * @return \Millennium\Soap\AppointmentListing
     */
    public function setChargeApptToRoom($ChargeApptToRoom)
    {
        $this->ChargeApptToRoom = $ChargeApptToRoom;

        return $this;
    }

    /**
     * @return string
     */
    public function getCheckInTime()
    {
        return $this->CheckInTime;
    }

    /**
     * @param string $CheckInTime
     *
     * @return \Millennium\Soap\AppointmentListing
     */
    public function setCheckInTime($CheckInTime)
    {
        $this->CheckInTime = $CheckInTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getCheckOutTime()
    {
        return $this->CheckOutTime;
    }

    /**
     * @param string $CheckOutTime
     *
     * @return \Millennium\Soap\AppointmentListing
     */
    public function setCheckOutTime($CheckOutTime)
    {
        $this->CheckOutTime = $CheckOutTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getClient()
    {
        return $this->Client;
    }

    /**
     * @param string $Client
     *
     * @return \Millennium\Soap\AppointmentListing
     */
    public function setClient($Client)
    {
        $this->Client = $Client;

        return $this;
    }

    /**
     * @return int
     */
    public function getClientId()
    {
        return $this->ClientId;
    }

    /**
     * @param int $ClientId
     *
     * @return \Millennium\Soap\AppointmentListing
     */
    public function setClientId($ClientId)
    {
        $this->ClientId = $ClientId;

        return $this;
    }

    /**
     * @return string
     */
    public function getConfirmationTypes()
    {
        return $this->ConfirmationTypes;
    }

    /**
     * @param string $ConfirmationTypes
     *
     * @return \Millennium\Soap\AppointmentListing
     */
    public function setConfirmationTypes($ConfirmationTypes)
    {
        $this->ConfirmationTypes = $ConfirmationTypes;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmployee()
    {
        return $this->Employee;
    }

    /**
     * @param string $Employee
     *
     * @return \Millennium\Soap\AppointmentListing
     */
    public function setEmployee($Employee)
    {
        $this->Employee = $Employee;

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
     * @return \Millennium\Soap\AppointmentListing
     */
    public function setEmployeeId($EmployeeId)
    {
        $this->EmployeeId = $EmployeeId;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmployeeImageUrl()
    {
        return $this->EmployeeImageUrl;
    }

    /**
     * @param string $EmployeeImageUrl
     *
     * @return \Millennium\Soap\AppointmentListing
     */
    public function setEmployeeImageUrl($EmployeeImageUrl)
    {
        $this->EmployeeImageUrl = $EmployeeImageUrl;

        return $this;
    }

    /**
     * @return float
     */
    public function getFinishLength()
    {
        return $this->FinishLength;
    }

    /**
     * @param float $FinishLength
     *
     * @return \Millennium\Soap\AppointmentListing
     */
    public function setFinishLength($FinishLength)
    {
        $this->FinishLength = $FinishLength;

        return $this;
    }

    /**
     * @return float
     */
    public function getGapLength()
    {
        return $this->GapLength;
    }

    /**
     * @param float $GapLength
     *
     * @return \Millennium\Soap\AppointmentListing
     */
    public function setGapLength($GapLength)
    {
        $this->GapLength = $GapLength;

        return $this;
    }

    /**
     * @return string
     */
    public function getGender()
    {
        return $this->Gender;
    }

    /**
     * @param string $Gender
     *
     * @return \Millennium\Soap\AppointmentListing
     */
    public function setGender($Gender)
    {
        $this->Gender = $Gender;

        return $this;
    }

    /**
     * @return int
     */
    public function getGenderid()
    {
        return $this->Genderid;
    }

    /**
     * @param int $Genderid
     *
     * @return \Millennium\Soap\AppointmentListing
     */
    public function setGenderid($Genderid)
    {
        $this->Genderid = $Genderid;

        return $this;
    }

    /**
     * @return bool
     */
    public function getHasCheckedIn()
    {
        return $this->HasCheckedIn;
    }

    /**
     * @param bool $HasCheckedIn
     *
     * @return \Millennium\Soap\AppointmentListing
     */
    public function setHasCheckedIn($HasCheckedIn)
    {
        $this->HasCheckedIn = $HasCheckedIn;

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
     * @return \Millennium\Soap\AppointmentListing
     */
    public function setId($Id)
    {
        $this->Id = $Id;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsClass()
    {
        return $this->IsClass;
    }

    /**
     * @param bool $IsClass
     *
     * @return \Millennium\Soap\AppointmentListing
     */
    public function setIsClass($IsClass)
    {
        $this->IsClass = $IsClass;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsNoShow()
    {
        return $this->IsNoShow;
    }

    /**
     * @param bool $IsNoShow
     *
     * @return \Millennium\Soap\AppointmentListing
     */
    public function setIsNoShow($IsNoShow)
    {
        $this->IsNoShow = $IsNoShow;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsRunningLate()
    {
        return $this->IsRunningLate;
    }

    /**
     * @param bool $IsRunningLate
     *
     * @return \Millennium\Soap\AppointmentListing
     */
    public function setIsRunningLate($IsRunningLate)
    {
        $this->IsRunningLate = $IsRunningLate;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastChanged()
    {
        if ($this->LastChanged == null) {
            return;
        } else {
            try {
                return new \DateTime($this->LastChanged);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $LastChanged
     *
     * @return \Millennium\Soap\AppointmentListing
     */
    public function setLastChanged(\DateTime $LastChanged = null)
    {
        if ($LastChanged == null) {
            $this->LastChanged = null;
        } else {
            $this->LastChanged = $LastChanged->format(\DateTime::ATOM);
        }

        return $this;
    }

    /**
     * @return int
     */
    public function getLastChangedByLoginId()
    {
        return $this->LastChangedByLoginId;
    }

    /**
     * @param int $LastChangedByLoginId
     *
     * @return \Millennium\Soap\AppointmentListing
     */
    public function setLastChangedByLoginId($LastChangedByLoginId)
    {
        $this->LastChangedByLoginId = $LastChangedByLoginId;

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
     * @return \Millennium\Soap\AppointmentListing
     */
    public function setNotes($Notes)
    {
        $this->Notes = $Notes;

        return $this;
    }

    /**
     * @return string
     */
    public function getPayingClient()
    {
        return $this->PayingClient;
    }

    /**
     * @param string $PayingClient
     *
     * @return \Millennium\Soap\AppointmentListing
     */
    public function setPayingClient($PayingClient)
    {
        $this->PayingClient = $PayingClient;

        return $this;
    }

    /**
     * @return int
     */
    public function getPayingClientId()
    {
        return $this->PayingClientId;
    }

    /**
     * @param int $PayingClientId
     *
     * @return \Millennium\Soap\AppointmentListing
     */
    public function setPayingClientId($PayingClientId)
    {
        $this->PayingClientId = $PayingClientId;

        return $this;
    }

    /**
     * @return bool
     */
    public function getPreBook()
    {
        return $this->PreBook;
    }

    /**
     * @param bool $PreBook
     *
     * @return \Millennium\Soap\AppointmentListing
     */
    public function setPreBook($PreBook)
    {
        $this->PreBook = $PreBook;

        return $this;
    }

    /**
     * @return string
     */
    public function getResource()
    {
        return $this->Resource;
    }

    /**
     * @param string $Resource
     *
     * @return \Millennium\Soap\AppointmentListing
     */
    public function setResource($Resource)
    {
        $this->Resource = $Resource;

        return $this;
    }

    /**
     * @return int
     */
    public function getResourceId()
    {
        return $this->ResourceId;
    }

    /**
     * @param int $ResourceId
     *
     * @return \Millennium\Soap\AppointmentListing
     */
    public function setResourceId($ResourceId)
    {
        $this->ResourceId = $ResourceId;

        return $this;
    }

    /**
     * @return string
     */
    public function getService()
    {
        return $this->Service;
    }

    /**
     * @param string $Service
     *
     * @return \Millennium\Soap\AppointmentListing
     */
    public function setService($Service)
    {
        $this->Service = $Service;

        return $this;
    }

    /**
     * @return int
     */
    public function getServiceId()
    {
        return $this->ServiceId;
    }

    /**
     * @param int $ServiceId
     *
     * @return \Millennium\Soap\AppointmentListing
     */
    public function setServiceId($ServiceId)
    {
        $this->ServiceId = $ServiceId;

        return $this;
    }

    /**
     * @return string
     */
    public function getServiceImageUrl()
    {
        return $this->ServiceImageUrl;
    }

    /**
     * @param string $ServiceImageUrl
     *
     * @return \Millennium\Soap\AppointmentListing
     */
    public function setServiceImageUrl($ServiceImageUrl)
    {
        $this->ServiceImageUrl = $ServiceImageUrl;

        return $this;
    }

    /**
     * @return float
     */
    public function getServicePrice()
    {
        return $this->ServicePrice;
    }

    /**
     * @param float $ServicePrice
     *
     * @return \Millennium\Soap\AppointmentListing
     */
    public function setServicePrice($ServicePrice)
    {
        $this->ServicePrice = $ServicePrice;

        return $this;
    }

    /**
     * @return int
     */
    public function getStandingHeaderId()
    {
        return $this->StandingHeaderId;
    }

    /**
     * @param int $StandingHeaderId
     *
     * @return \Millennium\Soap\AppointmentListing
     */
    public function setStandingHeaderId($StandingHeaderId)
    {
        $this->StandingHeaderId = $StandingHeaderId;

        return $this;
    }

    /**
     * @return float
     */
    public function getStartLength()
    {
        return $this->StartLength;
    }

    /**
     * @param float $StartLength
     *
     * @return \Millennium\Soap\AppointmentListing
     */
    public function setStartLength($StartLength)
    {
        $this->StartLength = $StartLength;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartTime()
    {
        if ($this->StartTime == null) {
            return;
        } else {
            try {
                return new \DateTime($this->StartTime);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $StartTime
     *
     * @return \Millennium\Soap\AppointmentListing
     */
    public function setStartTime(\DateTime $StartTime = null)
    {
        if ($StartTime == null) {
            $this->StartTime = null;
        } else {
            $this->StartTime = $StartTime->format(\DateTime::ATOM);
        }

        return $this;
    }
}
