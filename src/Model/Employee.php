<?php

namespace FPlus\Millennium\Model;

class Employee
{
    /**
     * @var string
     */
    protected $Code = null;

    /**
     * @var string
     */
    protected $DotNetName = null;

    /**
     * @var string
     */
    protected $EmployeeBio = null;

    /**
     * @var string
     */
    protected $EmployeeImageUrl = null;

    /**
     * @var string
     */
    protected $FirstName = null;

    /**
     * @var int
     */
    protected $Id = null;

    /**
     * @var string
     */
    protected $LastName = null;

    /**
     * @var Sex
     */
    protected $Sex = null;

    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param string $Code
     *
     * @return \Millennium\Soap\Employee
     */
    public function setCode($Code)
    {
        $this->Code = $Code;

        return $this;
    }

    /**
     * @return string
     */
    public function getDotNetName()
    {
        return $this->DotNetName;
    }

    /**
     * @param string $DotNetName
     *
     * @return \Millennium\Soap\Employee
     */
    public function setDotNetName($DotNetName)
    {
        $this->DotNetName = $DotNetName;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmployeeBio()
    {
        return $this->EmployeeBio;
    }

    /**
     * @param string $EmployeeBio
     *
     * @return \Millennium\Soap\Employee
     */
    public function setEmployeeBio($EmployeeBio)
    {
        $this->EmployeeBio = $EmployeeBio;

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
     * @return \Millennium\Soap\Employee
     */
    public function setEmployeeImageUrl($EmployeeImageUrl)
    {
        $this->EmployeeImageUrl = $EmployeeImageUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * @param string $FirstName
     *
     * @return \Millennium\Soap\Employee
     */
    public function setFirstName($FirstName)
    {
        $this->FirstName = $FirstName;

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
     * @return \Millennium\Soap\Employee
     */
    public function setId($Id)
    {
        $this->Id = $Id;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->LastName;
    }

    /**
     * @param string $LastName
     *
     * @return \Millennium\Soap\Employee
     */
    public function setLastName($LastName)
    {
        $this->LastName = $LastName;

        return $this;
    }

    /**
     * @return Sex
     */
    public function getSex()
    {
        return $this->Sex;
    }

    /**
     * @param Sex $Sex
     *
     * @return \Millennium\Soap\Employee
     */
    public function setSex($Sex)
    {
        $this->Sex = $Sex;

        return $this;
    }
}
