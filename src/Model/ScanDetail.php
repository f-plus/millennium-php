<?php

namespace FPlus\Millennium\Model;

class ScanDetail extends BaseDTO
{
    /**
     * @var int
     */
    protected $AppointmentType;

    /**
     * @var int
     */
    protected $ClientId;

    /**
     * @var int
     */
    protected $EmployeeId;

    /**
     * @var int
     */
    protected $MustComeId;

    /**
     * @var int
     */
    protected $ResourceId;

    /**
     * @var int
     */
    protected $ServiceId;

    public function __construct()
    {
    }

    /**
     * @return int
     */
    public function getAppointmentType()
    {
        return $this->AppointmentType;
    }

    /**
     * @param int $AppointmentType
     *
     * @return ScanDetail
     */
    public function setAppointmentType($AppointmentType)
    {
        $this->AppointmentType = $AppointmentType;

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
     * @return ScanDetail
     */
    public function setClientId($ClientId)
    {
        $this->ClientId = $ClientId;

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
     * @return ScanDetail
     */
    public function setEmployeeId($EmployeeId)
    {
        $this->EmployeeId = $EmployeeId;

        return $this;
    }

    /**
     * @return int
     */
    public function getMustComeId()
    {
        return $this->MustComeId;
    }

    /**
     * @param int $MustComeId
     *
     * @return ScanDetail
     */
    public function setMustComeId($MustComeId)
    {
        $this->MustComeId = $MustComeId;

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
     * @return ScanDetail
     */
    public function setResourceId($ResourceId)
    {
        $this->ResourceId = $ResourceId;

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
     * @return ScanDetail
     */
    public function setServiceId($ServiceId)
    {
        $this->ServiceId = $ServiceId;

        return $this;
    }
}
