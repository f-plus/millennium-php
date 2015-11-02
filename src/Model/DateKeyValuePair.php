<?php

namespace FPlus\Millennium\Model;

class DateKeyValuePair extends KeyValuePair
{
    /**
     * @param \DateTime $Key
     * @param mixed     $Value
     */
    public function __construct(\DateTime $Key, $Value)
    {
        $this->Key = $Key->format(\DateTime::ATOM);
        $this->Value = $Value;
    }

    /**
     * @return \DateTime
     */
    public function getKey()
    {
        if ($this->Key == null) {
            return null;
        } else {
            return new \DateTime($this->Key);
        }
    }

    /**
     * @param \DateTime $Key
     *
     * @return KeyValuePair
     */
    public function setKey(\DateTime $Key)
    {
        $this->Key = $Key->format(\DateTime::ATOM);

        return $this;
    }
}
