<?php

namespace FPlus\Millennium\Utils;

class MapIterator implements \Iterator
{
    private $position = 0;
    private $pairs;

    public function __construct(array $pairs)
    {
        $this->pairs = array_values($pairs);
    }

    public function rewind()
    {
        $this->position = 0;
    }

    public function current()
    {
        return $this->pairs[$this->position]->getValue();
    }

    public function key()
    {
        return $this->pairs[$this->position]->getKey();
    }

    public function next()
    {
        ++$this->position;
    }

    public function valid()
    {
        return isset($this->pairs[$this->position]);
    }
}
