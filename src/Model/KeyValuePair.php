<?php

namespace FPlus\Millennium\Model;

class KeyValuePair
{
    /**
     * @var mixed
     */
    protected $Key;

    /**
     * @var mixed
     */
    protected $Value;

    /**
     * @param mixed $Key
     * @param mixed $Value
     */
    public function __construct($Key, $Value)
    {
        $this->Key = $Key;
        $this->Value = $Value;
    }

    /**
     * @return mixed
     */
    public function getKey()
    {
        return $this->Key;
    }

    /**
     * @param mixed $Key
     *
     * @return KeyValuePair
     */
    public function setKey($Key)
    {
        $this->Key = $Key;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * @param mixed $Value
     *
     * @return KeyValuePair
     */
    public function setValue($Value)
    {
        $this->Value = $Value;

        return $this;
    }
}
