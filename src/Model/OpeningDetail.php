<?php

namespace FPlus\Millennium\Model;

class OpeningDetail extends BaseDTO
{
    /**
     * @var int
     */
    protected $AppointmentTypeId;

    /**
     * @var int
     */
    protected $ChoiceNumber;

    /**
     * @var int
     */
    protected $ClientId;

    /**
     * @var int
     */
    protected $EmployeeId;

    /**
     * @var string
     */
    protected $EmployeeImageUrl;

    /**
     * @var string
     */
    protected $EmployeeName;

    /**
     * @var \DateTime
     */
    protected $EndDateTime;

    /**
     * @var float
     */
    protected $FinishLength;

    /**
     * @var float
     */
    protected $GapLength;

    /**
     * @var int
     */
    protected $GenderId;

    /**
     * @var int
     */
    protected $OrderNumber;

    /**
     * @var float
     */
    protected $Price;

    /**
     * @var int
     */
    protected $ResourceId;

    /**
     * @var string
     */
    protected $ResourceName;

    /**
     * @var int
     */
    protected $ServiceId;

    /**
     * @var string
     */
    protected $ServiceImageUrl;

    /**
     * @var string
     */
    protected $ServiceName;

    /**
     * @var \DateTime
     */
    protected $StartDateTime;

    /**
     * @var float
     */
    protected $StartLength;

    public function __construct()
    {
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
     * @return OpeningDetail
     */
    public function setAppointmentTypeId($AppointmentTypeId)
    {
        $this->AppointmentTypeId = $AppointmentTypeId;

        return $this;
    }

    /**
     * @return int
     */
    public function getChoiceNumber()
    {
        return $this->ChoiceNumber;
    }

    /**
     * @param int $ChoiceNumber
     *
     * @return OpeningDetail
     */
    public function setChoiceNumber($ChoiceNumber)
    {
        $this->ChoiceNumber = $ChoiceNumber;

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
     * @return OpeningDetail
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
     * @return OpeningDetail
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
     * @return OpeningDetail
     */
    public function setEmployeeImageUrl($EmployeeImageUrl)
    {
        $this->EmployeeImageUrl = $EmployeeImageUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmployeeName()
    {
        return $this->EmployeeName;
    }

    /**
     * @param string $EmployeeName
     *
     * @return OpeningDetail
     */
    public function setEmployeeName($EmployeeName)
    {
        $this->EmployeeName = $EmployeeName;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDateTime()
    {
        if ($this->EndDateTime == null) {
            return null;
        } else {
            return new \DateTime($this->EndDateTime);
        }
    }

    /**
     * @param \DateTime $EndDateTime
     *
     * @return OpeningDetail
     */
    public function setEndDateTime(\DateTime $EndDateTime = null)
    {
        if ($EndDateTime == null) {
            $this->EndDateTime = null;
        } else {
            $this->EndDateTime = $EndDateTime->format(\DateTime::ATOM);
        }

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
     * @return OpeningDetail
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
     * @return OpeningDetail
     */
    public function setGapLength($GapLength)
    {
        $this->GapLength = $GapLength;

        return $this;
    }

    /**
     * @return int
     */
    public function getGenderId()
    {
        return $this->GenderId;
    }

    /**
     * @param int $GenderId
     *
     * @return OpeningDetail
     */
    public function setGenderId($GenderId)
    {
        $this->GenderId = $GenderId;

        return $this;
    }

    /**
     * @return int
     */
    public function getOrderNumber()
    {
        return $this->OrderNumber;
    }

    /**
     * @param int $OrderNumber
     *
     * @return OpeningDetail
     */
    public function setOrderNumber($OrderNumber)
    {
        $this->OrderNumber = $OrderNumber;

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
     * @return OpeningDetail
     */
    public function setPrice($Price)
    {
        $this->Price = $Price;

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
     * @return OpeningDetail
     */
    public function setResourceId($ResourceId)
    {
        $this->ResourceId = $ResourceId;

        return $this;
    }

    /**
     * @return string
     */
    public function getResourceName()
    {
        return $this->ResourceName;
    }

    /**
     * @param string $ResourceName
     *
     * @return OpeningDetail
     */
    public function setResourceName($ResourceName)
    {
        $this->ResourceName = $ResourceName;

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
     * @return OpeningDetail
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
     * @return OpeningDetail
     */
    public function setServiceImageUrl($ServiceImageUrl)
    {
        $this->ServiceImageUrl = $ServiceImageUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getServiceName()
    {
        return $this->ServiceName;
    }

    /**
     * @param string $ServiceName
     *
     * @return OpeningDetail
     */
    public function setServiceName($ServiceName)
    {
        $this->ServiceName = $ServiceName;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDateTime()
    {
        if ($this->StartDateTime == null) {
            return null;
        } else {
            return new \DateTime($this->StartDateTime);
        }
    }

    /**
     * @param \DateTime $StartDateTime
     *
     * @return OpeningDetail
     */
    public function setStartDateTime(\DateTime $StartDateTime = null)
    {
        if ($StartDateTime == null) {
            $this->StartDateTime = null;
        } else {
            $this->StartDateTime = $StartDateTime->format(\DateTime::ATOM);
        }

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
     * @return OpeningDetail
     */
    public function setStartLength($StartLength)
    {
        $this->StartLength = $StartLength;

        return $this;
    }
}
