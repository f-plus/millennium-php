<?php

namespace FPlus\Millennium\Model;

class TimeZoneInfo
{
    /**
     * @var string
     */
    protected $any;

    /**
     * @var QName
     */
    protected $FactoryType;

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
     * @return TimeZoneInfo
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
     * @return TimeZoneInfo
     */
    public function setFactoryType($FactoryType)
    {
        $this->FactoryType = $FactoryType;

        return $this;
    }
}
