<?php

namespace FPlus\Millennium\Model;

class ServiceClass
{
    /**
     * @var string
     */
    protected $BackgroundColor = null;

    /**
     * @var string
     */
    protected $Code = null;

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
     * @return \Millennium\Soap\ServiceClass
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
     * @return \Millennium\Soap\ServiceClass
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
     * @return \Millennium\Soap\ServiceClass
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
     * @return \Millennium\Soap\ServiceClass
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
     * @return \Millennium\Soap\ServiceClass
     */
    public function setName($Name)
    {
        $this->Name = $Name;

        return $this;
    }
}
