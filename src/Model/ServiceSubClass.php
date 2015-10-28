<?php

namespace FPlus\Millennium\Model;

class ServiceSubClass
{
    /**
     * @var string
     */
    protected $BackgroundColor = null;

    /**
     * @var int
     */
    protected $ClassId = null;

    /**
     * @var string
     */
    protected $ForegroundColor = null;

    /**
     * @var int
     */
    protected $Id = null;

    /**
     * @var string
     */
    protected $Name = null;

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
     * @return \Millennium\Soap\ServiceSubClass
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
     * @return \Millennium\Soap\ServiceSubClass
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
     * @return \Millennium\Soap\ServiceSubClass
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
     * @return \Millennium\Soap\ServiceSubClass
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
     * @return \Millennium\Soap\ServiceSubClass
     */
    public function setName($Name)
    {
        $this->Name = $Name;

        return $this;
    }
}
