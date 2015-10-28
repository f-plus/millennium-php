<?php

namespace FPlus\Millennium\Model;

class OpeningClass extends BaseDTO
{
    /**
     * @var int
     */
    protected $ClassBooked = null;

    /**
     * @var int
     */
    protected $ClassId = null;

    /**
     * @var string
     */
    protected $ClassImageUrl = null;

    /**
     * @var string
     */
    protected $ClassName = null;

    /**
     * @var int
     */
    protected $ClassTotal = null;

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
     * @var int
     */
    protected $HeaderId = null;

    /**
     * @var \DateTime
     */
    protected $StartDateTime = null;

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
     * @return \Millennium\Soap\OpeningClass
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
     * @return \Millennium\Soap\OpeningClass
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
     * @return \Millennium\Soap\OpeningClass
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
     * @return \Millennium\Soap\OpeningClass
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
     * @return \Millennium\Soap\OpeningClass
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
     * @return \Millennium\Soap\OpeningClass
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
     * @return \Millennium\Soap\OpeningClass
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
     * @return \Millennium\Soap\OpeningClass
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
     * @return \Millennium\Soap\OpeningClass
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
     * @return \Millennium\Soap\OpeningClass
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
     * @return \Millennium\Soap\OpeningClass
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
     * @return \Millennium\Soap\OpeningClass
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
