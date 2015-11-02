<?php

namespace FPlus\Millennium\Model;

use FPlus\Millennium\Utils\MapIterator;

class ClientHistoryMap implements \IteratorAggregate
{
    /**
     * @var DateKeyValuePair[]
     */
    protected $KeyValueOfdateTimeArrayOfClientHistoryabPHSVWZ;

    public function __construct()
    {
    }

    /**
     * @return DateKeyValuePair[]
     */
    public function getPairs()
    {
        return $this->KeyValueOfdateTimeArrayOfClientHistoryabPHSVWZ;
    }

    /**
     * @param DateKeyValuePair[] $Pairs
     *
     * @return ClientHistoryMap
     */
    public function setPairs(array $Pairs = null)
    {
        $this->KeyValueOfdateTimeArrayOfClientHistoryabPHSVWZ = $Pairs

        return $this;
    }
	
	public function getIterator()
	{
		return new MapIterator($this->KeyValueOfdateTimeArrayOfClientHistoryabPHSVWZ);
	}
}
