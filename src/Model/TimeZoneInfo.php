<?php

namespace FPlus\Millennium\Model;

class TimeZoneInfo
{
    /**
     * @var string
     */
    protected $any = null;

    /**
     * @var QName
     */
    protected $FactoryType = null;

    /**
     * @param string $any
     * @param QName  $FactoryType
     */
    public function __construct($any, $FactoryType)
    {
        $this->any = $any;
        $this->FactoryType = $FactoryType;
    }

    /**
     * @return string
     */
    public function getAny()
    {
        return $this->any;
    }

    /**
     * @param string $any
     *
     * @return \Millennium\Soap\TimeZoneInfo
     */
    public function setAny($any)
    {
        $this->any = $any;

        return $this;
    }

    /**
     * @return QName
     */
    public function getFactoryType()
    {
        return $this->FactoryType;
    }

    /**
     * @param QName $FactoryType
     *
     * @return \Millennium\Soap\TimeZoneInfo
     */
    public function setFactoryType($FactoryType)
    {
        $this->FactoryType = $FactoryType;

        return $this;
    }
}
