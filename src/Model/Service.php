<?php

namespace FPlus\Millennium\Model;

class Service
{
    /**
     * @var bool
     */
    protected $CanBePerformOnFemale;

    /**
     * @var bool
     */
    protected $CanBePerformOnMale;

    /**
     * @var string
     */
    protected $Catalog;

    /**
     * @var int
     */
    protected $ClassId;

    /**
     * @var string
     */
    protected $Code;

    /**
     * @var bool
     */
    protected $ForceGender;

    /**
     * @var int
     */
    protected $Id;

    /**
     * @var bool
     */
    protected $IsClass;

    /**
     * @var string
     */
    protected $Name;

    /**
     * @var string
     */
    protected $Notes;

    /**
     * @var float
     */
    protected $PriceHigh;

    /**
     * @var float
     */
    protected $PriceLow;

    /**
     * @var string
     */
    protected $ServiceImageUrl;

    /**
     * @var bool
     */
    protected $ShowNotes;

    /**
     * @var int
     */
    protected $SubClassId;

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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
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
     * @return Service
     */
    public function setSubClassId($SubClassId)
    {
        $this->SubClassId = $SubClassId;

        return $this;
    }
}
