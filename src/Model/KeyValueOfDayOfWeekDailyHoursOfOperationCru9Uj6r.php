<?php

namespace FPlus\Millennium\Model;

class KeyValueOfDayOfWeekDailyHoursOfOperationCru9Uj6r
{
    /**
     * @var DayOfWeek
     */
    protected $Key = null;

    /**
     * @var DailyHoursOfOperation
     */
    protected $Value = null;

    /**
     * @param DayOfWeek             $Key
     * @param DailyHoursOfOperation $Value
     */
    public function __construct($Key, $Value)
    {
        $this->Key = $Key;
        $this->Value = $Value;
    }

    /**
     * @return DayOfWeek
     */
    public function getKey()
    {
        return $this->Key;
    }

    /**
     * @param DayOfWeek $Key
     *
     * @return \Millennium\Soap\KeyValueOfDayOfWeekDailyHoursOfOperationCru9Uj6r
     */
    public function setKey($Key)
    {
        $this->Key = $Key;

        return $this;
    }

    /**
     * @return DailyHoursOfOperation
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * @param DailyHoursOfOperation $Value
     *
     * @return \Millennium\Soap\KeyValueOfDayOfWeekDailyHoursOfOperationCru9Uj6r
     */
    public function setValue($Value)
    {
        $this->Value = $Value;

        return $this;
    }
}
