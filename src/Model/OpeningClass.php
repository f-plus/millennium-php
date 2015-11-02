<?php

namespace FPlus\Millennium\Model;

class OpeningClass extends BaseDTO
{
    /**
     * @var int
     */
    protected $ClassBooked;

    /**
     * @var int
     */
    protected $ClassId;

    /**
     * @var string
     */
    protected $ClassImageUrl;

    /**
     * @var string
     */
    protected $ClassName;

    /**
     * @var int
     */
    protected $ClassTotal;

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
     * @var int
     */
    protected $HeaderId;

    /**
     * @var \DateTime
     */
    protected $StartDateTime;

    public function __construct()
    {
    }

    /**
     * @return int
     */
    public function getClassBooked()
    {
        return $this->ClassBooked;
    }

    /**
     * @param int $ClassBooked
     *
     * @return OpeningClass
     */
    public function setClassBooked($ClassBooked)
    {
        $this->ClassBooked = $ClassBooked;

        return $this;
    }

    /**
     * @return int
     */
    public function getClassId()
    {
        return $this->ClassId;
    }

    /**
     * @param int $ClassId
     *
     * @return OpeningClass
     */
    public function setClassId($ClassId)
    {
        $this->ClassId = $ClassId;

        return $this;
    }

    /**
     * @return string
     */
    public function getClassImageUrl()
    {
        return $this->ClassImageUrl;
    }

    /**
     * @param string $ClassImageUrl
     *
     * @return OpeningClass
     */
    public function setClassImageUrl($ClassImageUrl)
    {
        $this->ClassImageUrl = $ClassImageUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getClassName()
    {
        return $this->ClassName;
    }

    /**
     * @param string $ClassName
     *
     * @return OpeningClass
     */
    public function setClassName($ClassName)
    {
        $this->ClassName = $ClassName;

        return $this;
    }

    /**
     * @return int
     */
    public function getClassTotal()
    {
        return $this->ClassTotal;
    }

    /**
     * @param int $ClassTotal
     *
     * @return OpeningClass
     */
    public function setClassTotal($ClassTotal)
    {
        $this->ClassTotal = $ClassTotal;

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
     * @return OpeningClass
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
     * @return OpeningClass
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
     * @return OpeningClass
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
     * @return OpeningClass
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
     * @return OpeningClass
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
     * @return int
     */
    public function getHeaderId()
    {
        return $this->HeaderId;
    }

    /**
     * @param int $HeaderId
     *
     * @return OpeningClass
     */
    public function setHeaderId($HeaderId)
    {
        $this->HeaderId = $HeaderId;

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
     * @return OpeningClass
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
}
