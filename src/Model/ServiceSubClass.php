<?php

namespace FPlus\Millennium\Model;

class ServiceSubClass
{
    /**
     * @var string
     */
    protected $BackgroundColor;

    /**
     * @var int
     */
    protected $ClassId;

    /**
     * @var string
     */
    protected $ForegroundColor;

    /**
     * @var int
     */
    protected $Id;

    /**
     * @var string
     */
    protected $Name;

    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getBackgroundColor()
    {
        return $this->BackgroundColor;
    }

    /**
     * @param string $BackgroundColor
     *
     * @return ServiceSubClass
     */
    public function setBackgroundColor($BackgroundColor)
    {
        $this->BackgroundColor = $BackgroundColor;

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
     * @return ServiceSubClass
     */
    public function setClassId($ClassId)
    {
        $this->ClassId = $ClassId;

        return $this;
    }

    /**
     * @return string
     */
    public function getForegroundColor()
    {
        return $this->ForegroundColor;
    }

    /**
     * @param string $ForegroundColor
     *
     * @return ServiceSubClass
     */
    public function setForegroundColor($ForegroundColor)
    {
        $this->ForegroundColor = $ForegroundColor;

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
     * @return ServiceSubClass
     */
    public function setId($Id)
    {
        $this->Id = $Id;

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
     * @return ServiceSubClass
     */
    public function setName($Name)
    {
        $this->Name = $Name;

        return $this;
    }
}
