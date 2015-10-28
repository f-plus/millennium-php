<?php

namespace FPlus\Millennium\Model;

class ScanDetail extends BaseDTO
{
    /**
     * @var int
     */
    protected $AppointmentType = null;

    /**
     * @var int
     */
    protected $ClientId = null;

    /**
     * @var int
     */
    protected $EmployeeId = null;

    /**
     * @var int
     */
    protected $MustComeId = null;

    /**
     * @var int
     */
    protected $ResourceId = null;

    /**
     * @var int
     */
    protected $ServiceId = null;

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
     * @return \Millennium\Soap\ScanDetail
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
     * @return \Millennium\Soap\ScanDetail
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
     * @return \Millennium\Soap\ScanDetail
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
     * @return \Millennium\Soap\ScanDetail
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
     * @return \Millennium\Soap\ScanDetail
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
     * @return \Millennium\Soap\ScanDetail
     */
    public function setServiceId($ServiceId)
    {
        $this->ServiceId = $ServiceId;

        return $this;
    }
}
