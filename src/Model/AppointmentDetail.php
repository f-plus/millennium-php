<?php

namespace FPlus\Millennium\Model;

class AppointmentDetail
{
    /**
     * @var string
     */
    protected $AppointmentType = null;

    /**
     * @var int
     */
    protected $AppointmentTypeId = null;

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
    protected $IsNoShow = null;

    /**
     * @var bool
     */
    protected $IsRunningLate = null;

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
     * @return string
     */
    public function getAppointmentType()
    {
        return $this->AppointmentType;
    }

    /**
     * @param string $AppointmentType
     *
     * @return \Millennium\Soap\AppointmentDetail
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
     * @return \Millennium\Soap\AppointmentDetail
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
     * @return \Millennium\Soap\AppointmentDetail
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
     * @return \Millennium\Soap\AppointmentDetail
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
     * @return \Millennium\Soap\AppointmentDetail
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
     * @return \Millennium\Soap\AppointmentDetail
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
     * @return \Millennium\Soap\AppointmentDetail
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
     * @return \Millennium\Soap\AppointmentDetail
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
     * @return \Millennium\Soap\AppointmentDetail
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
     * @return \Millennium\Soap\AppointmentDetail
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
     * @return \Millennium\Soap\AppointmentDetail
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
     * @return \Millennium\Soap\AppointmentDetail
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
     * @return \Millennium\Soap\AppointmentDetail
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
     * @return \Millennium\Soap\AppointmentDetail
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
     * @return \Millennium\Soap\AppointmentDetail
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
     * @return \Millennium\Soap\AppointmentDetail
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
     * @return \Millennium\Soap\AppointmentDetail
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
     * @return \Millennium\Soap\AppointmentDetail
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
     * @return \Millennium\Soap\AppointmentDetail
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
     * @return \Millennium\Soap\AppointmentDetail
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
     * @return \Millennium\Soap\AppointmentDetail
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
     * @return \Millennium\Soap\AppointmentDetail
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
     * @return \Millennium\Soap\AppointmentDetail
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
     * @return \Millennium\Soap\AppointmentDetail
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
     * @return \Millennium\Soap\AppointmentDetail
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
