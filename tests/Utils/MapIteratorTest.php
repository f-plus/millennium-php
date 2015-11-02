<?php

namespace FPlus\Millennium\Tests\Utils;

use FPlus\Millennium\Model\KeyValuePair;
use FPlus\Millennium\Utils\MapIterator;

class MapIteratorTest extends \PHPUnit_Framework_TestCase
{
    public function testNoPairs()
    {
        $it = new MapIterator([]);

        $count = 0;
        foreach ($it as $key => $value) {
            $count++;
        }

        $this->assertEquals(0, $count);
    }

    public function testWithPairs()
    {
        $it = new MapIterator([
            new KeyValuePair('a', 'b'),
            new KeyValuePair('c', 'd'),
            new KeyValuePair('e', 'f'),
        ]);

        $keys = [];
        $values = [];
        foreach ($it as $key => $value) {
            $keys[] = $key;
            $values[] = $value;
        }

        $this->assertEquals(['a', 'c', 'e'], $keys);
        $this->assertEquals(['b', 'd', 'f'], $values);
    }
}
