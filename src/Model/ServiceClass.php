<?php

namespace FPlus\Millennium\Model;

class ServiceClass
{
    /**
     * @var string
     */
    protected $BackgroundColor;

    /**
     * @var string
     */
    protected $Code;

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
     * @return ServiceClass
     */
    public function setBackgroundColor($BackgroundColor)
    {
        $this->BackgroundColor = $BackgroundColor;

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
     * @return ServiceClass
     */
    public function setCode($Code)
    {
        $this->Code = $Code;

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
     * @return ServiceClass
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
     * @return ServiceClass
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
     * @return ServiceClass
     */
    public function setName($Name)
    {
        $this->Name = $Name;

        return $this;
    }
}
