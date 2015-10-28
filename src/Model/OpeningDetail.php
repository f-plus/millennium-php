<?php

namespace FPlus\Millennium\Model;

class OpeningDetail extends BaseDTO
{
    /**
     * @var int
     */
    protected $AppointmentTypeId = null;

    /**
     * @var int
     */
    protected $ChoiceNumber = null;

    /**
     * @var int
     */
    protected $ClientId = null;

    /**
     * @var int
     */
    protected $EmployeeId = null;

    /**
     * @var string
     */
    protected $EmployeeImageUrl = null;

    /**
     * @var string
     */
    protected $EmployeeName = null;

    /**
     * @var \DateTime
     */
    protected $EndDateTime = null;

    /**
     * @var float
     */
    protected $FinishLength = null;

    /**
     * @var float
     */
    protected $GapLength = null;

    /**
     * @var int
     */
    protected $GenderId = null;

    /**
     * @var int
     */
    protected $OrderNumber = null;

    /**
     * @var float
     */
    protected $Price = null;

    /**
     * @var int
     */
    protected $ResourceId = null;

    /**
     * @var string
     */
    protected $ResourceName = null;

    /**
     * @var int
     */
    protected $ServiceId = null;

    /**
     * @var string
     */
    protected $ServiceImageUrl = null;

    /**
     * @var string
     */
    protected $ServiceName = null;

    /**
     * @var \DateTime
     */
    protected $StartDateTime = null;

    /**
     * @var float
     */
    protected $StartLength = null;

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
     * @return \Millennium\Soap\OpeningDetail
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
     * @return \Millennium\Soap\OpeningDetail
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
     * @return \Millennium\Soap\OpeningDetail
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
     * @return \Millennium\Soap\OpeningDetail
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
     * @return \Millennium\Soap\OpeningDetail
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
     * @return \Millennium\Soap\OpeningDetail
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
            return;
        } else {
            try {
                return new \DateTime($this->EndDateTime);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $EndDateTime
     *
     * @return \Millennium\Soap\OpeningDetail
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
     * @return \Millennium\Soap\OpeningDetail
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
     * @return \Millennium\Soap\OpeningDetail
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
     * @return \Millennium\Soap\OpeningDetail
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
     * @return \Millennium\Soap\OpeningDetail
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
     * @return \Millennium\Soap\OpeningDetail
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
     * @return \Millennium\Soap\OpeningDetail
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
     * @return \Millennium\Soap\OpeningDetail
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
     * @return \Millennium\Soap\OpeningDetail
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
     * @return \Millennium\Soap\OpeningDetail
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
     * @return \Millennium\Soap\OpeningDetail
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
            return;
        } else {
            try {
                return new \DateTime($this->StartDateTime);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $StartDateTime
     *
     * @return \Millennium\Soap\OpeningDetail
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
     * @return \Millennium\Soap\OpeningDetail
     */
    public function setStartLength($StartLength)
    {
        $this->StartLength = $StartLength;

        return $this;
    }
}
