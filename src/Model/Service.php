<?php

namespace FPlus\Millennium\Model;

class Service
{
    /**
     * @var bool
     */
    protected $CanBePerformOnFemale = null;

    /**
     * @var bool
     */
    protected $CanBePerformOnMale = null;

    /**
     * @var string
     */
    protected $Catalog = null;

    /**
     * @var int
     */
    protected $ClassId = null;

    /**
     * @var string
     */
    protected $Code = null;

    /**
     * @var bool
     */
    protected $ForceGender = null;

    /**
     * @var int
     */
    protected $Id = null;

    /**
     * @var bool
     */
    protected $IsClass = null;

    /**
     * @var string
     */
    protected $Name = null;

    /**
     * @var string
     */
    protected $Notes = null;

    /**
     * @var float
     */
    protected $PriceHigh = null;

    /**
     * @var float
     */
    protected $PriceLow = null;

    /**
     * @var string
     */
    protected $ServiceImageUrl = null;

    /**
     * @var bool
     */
    protected $ShowNotes = null;

    /**
     * @var int
     */
    protected $SubClassId = null;

    public function __construct()
    {
    }

    /**
     * @return bool
     */
    public function getCanBePerformOnFemale()
    {
        return $this->CanBePerformOnFemale;
    }

    /**
     * @param bool $CanBePerformOnFemale
     *
     * @return \Millennium\Soap\Service
     */
    public function setCanBePerformOnFemale($CanBePerformOnFemale)
    {
        $this->CanBePerformOnFemale = $CanBePerformOnFemale;

        return $this;
    }

    /**
     * @return bool
     */
    public function getCanBePerformOnMale()
    {
        return $this->CanBePerformOnMale;
    }

    /**
     * @param bool $CanBePerformOnMale
     *
     * @return \Millennium\Soap\Service
     */
    public function setCanBePerformOnMale($CanBePerformOnMale)
    {
        $this->CanBePerformOnMale = $CanBePerformOnMale;

        return $this;
    }

    /**
     * @return string
     */
    public function getCatalog()
    {
        return $this->Catalog;
    }

    /**
     * @param string $Catalog
     *
     * @return \Millennium\Soap\Service
     */
    public function setCatalog($Catalog)
    {
        $this->Catalog = $Catalog;

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
     * @return \Millennium\Soap\Service
     */
    public function setClassId($ClassId)
    {
        $this->ClassId = $ClassId;

        return $this;
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
     * @return \Millennium\Soap\Service
     */
    public function setCode($Code)
    {
        $this->Code = $Code;

        return $this;
    }

    /**
     * @return bool
     */
    public function getForceGender()
    {
        return $this->ForceGender;
    }

    /**
     * @param bool $ForceGender
     *
     * @return \Millennium\Soap\Service
     */
    public function setForceGender($ForceGender)
    {
        $this->ForceGender = $ForceGender;

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
     * @return \Millennium\Soap\Service
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
     * @return \Millennium\Soap\Service
     */
    public function setIsClass($IsClass)
    {
        $this->IsClass = $IsClass;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     *
     * @return \Millennium\Soap\Service
     */
    public function setName($Name)
    {
        $this->Name = $Name;

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
     * @return \Millennium\Soap\Service
     */
    public function setNotes($Notes)
    {
        $this->Notes = $Notes;

        return $this;
    }

    /**
     * @return float
     */
    public function getPriceHigh()
    {
        return $this->PriceHigh;
    }

    /**
     * @param float $PriceHigh
     *
     * @return \Millennium\Soap\Service
     */
    public function setPriceHigh($PriceHigh)
    {
        $this->PriceHigh = $PriceHigh;

        return $this;
    }

    /**
     * @return float
     */
    public function getPriceLow()
    {
        return $this->PriceLow;
    }

    /**
     * @param float $PriceLow
     *
     * @return \Millennium\Soap\Service
     */
    public function setPriceLow($PriceLow)
    {
        $this->PriceLow = $PriceLow;

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
     * @return \Millennium\Soap\Service
     */
    public function setServiceImageUrl($ServiceImageUrl)
    {
        $this->ServiceImageUrl = $ServiceImageUrl;

        return $this;
    }

    /**
     * @return bool
     */
    public function getShowNotes()
    {
        return $this->ShowNotes;
    }

    /**
     * @param bool $ShowNotes
     *
     * @return \Millennium\Soap\Service
     */
    public function setShowNotes($ShowNotes)
    {
        $this->ShowNotes = $ShowNotes;

        return $this;
    }

    /**
     * @return int
     */
    public function getSubClassId()
    {
        return $this->SubClassId;
    }

    /**
     * @param int $SubClassId
     *
     * @return \Millennium\Soap\Service
     */
    public function setSubClassId($SubClassId)
    {
        $this->SubClassId = $SubClassId;

        return $this;
    }
}
