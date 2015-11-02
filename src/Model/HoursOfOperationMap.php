<?php

namespace FPlus\Millennium\Model;

use FPlus\Millennium\Utils\MapIterator;

class HoursOfOperationMap implements \IteratorAggregate
{
    /**
     * @var KeyValuePair[]
     */
    protected $KeyValueOfDayOfWeekDailyHoursOfOperationCru9Uj6r;

    public function __construct()
    {
    }

    /**
     * @return KeyValuePair[]
     */
    public function getPairs()
    {
        return $this->KeyValueOfDayOfWeekDailyHoursOfOperationCru9Uj6r;
    }

    /**
     * @param KeyValuePair[] $pairs
     *
     * @return HoursOfOperationMap
     */
    public function setPairs(array $Pairs = null)
    {
        $this->KeyValueOfDayOfWeekDailyHoursOfOperationCru9Uj6r = $Pairs;

        return $this;
    }

    public function getIterator()
    {
        return new MapIterator($this->KeyValueOfDayOfWeekDailyHoursOfOperationCru9Uj6r);
    }
}
