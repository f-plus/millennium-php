<?php

namespace FPlus\Millennium\Model;

class AppointmentDetail
{
    /**
     * @var string
     */
    protected $AppointmentType;

    /**
     * @var int
     */
    protected $AppointmentTypeId;

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
    protected $IsNoShow;

    /**
     * @var bool
     */
    protected $IsRunningLate;

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
     * @return string
     */
    public function getAppointmentType()
    {
        return $this->AppointmentType;
    }

    /**
     * @param string $AppointmentType
     *
     * @return AppointmentDetail
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
     * @return AppointmentDetail
     */
    public function setAppointmentTypeId($AppointmentTypeId)
    {
        $this->AppointmentTypeId = $AppointmentTypeId;

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
     * @return AppointmentDetail
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
     * @return AppointmentDetail
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
     * @return AppointmentDetail
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
     * @return AppointmentDetail
     */
    public function setClientId($ClientId)
    {
        $this->ClientId = $ClientId;

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
     * @return AppointmentDetail
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
     * @return AppointmentDetail
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
     * @return AppointmentDetail
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
     * @return AppointmentDetail
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
     * @return AppointmentDetail
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
     * @return AppointmentDetail
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
     * @return AppointmentDetail
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
     * @return AppointmentDetail
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
     * @return AppointmentDetail
     */
    public function setId($Id)
    {
        $this->Id = $Id;

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
     * @return AppointmentDetail
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
     * @return AppointmentDetail
     */
    public function setIsRunningLate($IsRunningLate)
    {
        $this->IsRunningLate = $IsRunningLate;

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
     * @return AppointmentDetail
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
     * @return AppointmentDetail
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
     * @return AppointmentDetail
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
     * @return AppointmentDetail
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
     * @return AppointmentDetail
     */
    public function setServiceImageUrl($ServiceImageUrl)
    {
        $this->ServiceImageUrl = $ServiceImageUrl;

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
     * @return AppointmentDetail
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
     * @return AppointmentDetail
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
     * @return AppointmentDetail
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
