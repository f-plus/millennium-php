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
            return;
        } else {
            try {
                return new \DateTime($this->Key);
            } catch (\Exception $e) {
                return false;
            }
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
