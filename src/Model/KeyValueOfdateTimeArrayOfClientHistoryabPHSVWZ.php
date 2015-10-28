<?php

namespace FPlus\Millennium\Model;

class KeyValueOfdateTimeArrayOfClientHistoryabPHSVWZ
{
    /**
     * @var \DateTime
     */
    protected $Key = null;

    /**
     * @var ArrayOfClientHistory
     */
    protected $Value = null;

    /**
     * @param \DateTime            $Key
     * @param ArrayOfClientHistory $Value
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
     * @return \Millennium\Soap\KeyValueOfdateTimeArrayOfClientHistoryabPHSVWZ
     */
    public function setKey(\DateTime $Key)
    {
        $this->Key = $Key->format(\DateTime::ATOM);

        return $this;
    }

    /**
     * @return ArrayOfClientHistory
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * @param ArrayOfClientHistory $Value
     *
     * @return \Millennium\Soap\KeyValueOfdateTimeArrayOfClientHistoryabPHSVWZ
     */
    public function setValue($Value)
    {
        $this->Value = $Value;

        return $this;
    }
}
