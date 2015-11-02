<?php

namespace FPlus\Millennium\Model;

class AppointmentListing
{
    /**
     * @var \DateTime
     */
    protected $AppointmentDate;

    /**
     * @var int
     */
    protected $AppointmentDetailId;

    /**
     * @var string
     */
    protected $AppointmentType;

    /**
     * @var int
     */
    protected $AppointmentTypeId;

    /**
     * @var int
     */
    protected $BookedByLoginId;

    /**
     * @var \DateTime
     */
    protected $BookedOn;

    /**
     * @var bool
     */
    protected $BookedOnLine;

    /**
     * @var bool
     */
    protected $ChargeApptToRoom;

    /**
     * @var string
     */
    protected $CheckInTime;

    /**
     * @var string
     */
    protected $CheckOutTime;

    /**
     * @var string
     */
    protected $Client;

    /**
     * @var int
     */
    protected $ClientId;

    /**
     * @var string
     */
    protected $ConfirmationTypes;

    /**
     * @var string
     */
    protected $Employee;

    /**
     * @var int
     */
    protected $EmployeeId;

    /**
     * @var string
     */
    protected $EmployeeImageUrl;

    /**
     * @var float
     */
    protected $FinishLength;

    /**
     * @var float
     */
    protected $GapLength;

    /**
     * @var string
     */
    protected $Gender;

    /**
     * @var int
     */
    protected $Genderid;

    /**
     * @var bool
     */
    protected $HasCheckedIn;

    /**
     * @var int
     */
    protected $Id;

    /**
     * @var bool
     */
    protected $IsClass;

    /**
     * @var bool
     */
    protected $IsNoShow;

    /**
     * @var bool
     */
    protected $IsRunningLate;

    /**
     * @var \DateTime
     */
    protected $LastChanged;

    /**
     * @var int
     */
    protected $LastChangedByLoginId;

    /**
     * @var string
     */
    protected $Notes;

    /**
     * @var string
     */
    protected $PayingClient;

    /**
     * @var int
     */
    protected $PayingClientId;

    /**
     * @var bool
     */
    protected $PreBook;

    /**
     * @var string
     */
    protected $Resource;

    /**
     * @var int
     */
    protected $ResourceId;

    /**
     * @var string
     */
    protected $Service;

    /**
     * @var int
     */
    protected $ServiceId;

    /**
     * @var string
     */
    protected $ServiceImageUrl;

    /**
     * @var float
     */
    protected $ServicePrice;

    /**
     * @var int
     */
    protected $StandingHeaderId;

    /**
     * @var float
     */
    protected $StartLength;

    /**
     * @var \DateTime
     */
    protected $StartTime;

    public function __construct()
    {
    }

    /**
     * @return \DateTime
     */
    public function getAppointmentDate()
    {
        if ($this->AppointmentDate == null) {
            return null;
        } else {
            return new \DateTime($this->AppointmentDate);
        }
    }

    /**
     * @param \DateTime $AppointmentDate
     *
     * @return AppointmentListing
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
     * @return AppointmentListing
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
     * @return AppointmentListing
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
     * @return AppointmentListing
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
     * @return AppointmentListing
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
            return null;
        } else {
            return new \DateTime($this->BookedOn);
        }
    }

    /**
     * @param \DateTime $BookedOn
     *
     * @return AppointmentListing
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
     * @return AppointmentListing
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
     * @return AppointmentListing
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
     * @return AppointmentListing
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
     * @return AppointmentListing
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
     * @return AppointmentListing
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
     * @return AppointmentListing
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
     * @return AppointmentListing
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
     * @return AppointmentListing
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
     * @return AppointmentListing
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
     * @return AppointmentListing
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
     * @return AppointmentListing
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
     * @return AppointmentListing
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
     * @return AppointmentListing
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
     * @return AppointmentListing
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
     * @return AppointmentListing
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
     * @return AppointmentListing
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
     * @return AppointmentListing
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
     * @return AppointmentListing
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
     * @return AppointmentListing
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
            return null;
        } else {
            return new \DateTime($this->LastChanged);
        }
    }

    /**
     * @param \DateTime $LastChanged
     *
     * @return AppointmentListing
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
     * @return AppointmentListing
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
     * @return AppointmentListing
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
     * @return AppointmentListing
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
     * @return AppointmentListing
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
     * @return AppointmentListing
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
     * @return AppointmentListing
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
     * @return AppointmentListing
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
     * @return AppointmentListing
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
     * @return AppointmentListing
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
     * @return AppointmentListing
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
     * @return AppointmentListing
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
     * @return AppointmentListing
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
     * @return AppointmentListing
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
            return null;
        } else {
            return new \DateTime($this->StartTime);
        }
    }

    /**
     * @param \DateTime $StartTime
     *
     * @return AppointmentListing
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
