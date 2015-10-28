<?php

namespace FPlus\Millennium\Model;

class GCType extends BaseDTO
{
    /**
     * @var \DateTime
     */
    protected $CreatedOn = null;

    /**
     * @var float
     */
    protected $DefaultPrice = null;

    /**
     * @var float
     */
    protected $DefaultValue = null;

    /**
     * @var int
     */
    protected $ExpireWeeks = null;

    /**
     * @var int
     */
    protected $Id = null;

    /**
     * @var bool
     */
    protected $Inactive = null;

    /**
     * @var \DateTime
     */
    protected $LastChanged = null;

    /**
     * @var int
     */
    protected $LastChangedById = null;

    /**
     * @var string
     */
    protected $Name = null;

    /**
     * @var \DateTime
     */
    protected $ValidFrom = null;

    public function __construct()
    {
    }

    /**
     * @return \DateTime
     */
    public function getCreatedOn()
    {
        if ($this->CreatedOn == null) {
            return;
        } else {
            try {
                return new \DateTime($this->CreatedOn);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $CreatedOn
     *
     * @return \Millennium\Soap\GCType
     */
    public function setCreatedOn(\DateTime $CreatedOn = null)
    {
        if ($CreatedOn == null) {
            $this->CreatedOn = null;
        } else {
            $this->CreatedOn = $CreatedOn->format(\DateTime::ATOM);
        }

        return $this;
    }

    /**
     * @return float
     */
    public function getDefaultPrice()
    {
        return $this->DefaultPrice;
    }

    /**
     * @param float $DefaultPrice
     *
     * @return \Millennium\Soap\GCType
     */
    public function setDefaultPrice($DefaultPrice)
    {
        $this->DefaultPrice = $DefaultPrice;

        return $this;
    }

    /**
     * @return float
     */
    public function getDefaultValue()
    {
        return $this->DefaultValue;
    }

    /**
     * @param float $DefaultValue
     *
     * @return \Millennium\Soap\GCType
     */
    public function setDefaultValue($DefaultValue)
    {
        $this->DefaultValue = $DefaultValue;

        return $this;
    }

    /**
     * @return int
     */
    public function getExpireWeeks()
    {
        return $this->ExpireWeeks;
    }

    /**
     * @param int $ExpireWeeks
     *
     * @return \Millennium\Soap\GCType
     */
    public function setExpireWeeks($ExpireWeeks)
    {
        $this->ExpireWeeks = $ExpireWeeks;

        return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param int $Id
     *
     * @return \Millennium\Soap\GCType
     */
    public function setId($Id)
    {
        $this->Id = $Id;

        return $this;
    }

    /**
     * @return bool
     */
    public function getInactive()
    {
        return $this->Inactive;
    }

    /**
     * @param bool $Inactive
     *
     * @return \Millennium\Soap\GCType
     */
    public function setInactive($Inactive)
    {
        $this->Inactive = $Inactive;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastChanged()
    {
        if ($this->LastChanged == null) {
            return;
        } else {
            try {
                return new \DateTime($this->LastChanged);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $LastChanged
     *
     * @return \Millennium\Soap\GCType
     */
    public function setLastChanged(\DateTime $LastChanged = null)
    {
        if ($LastChanged == null) {
            $this->LastChanged = null;
        } else {
            $this->LastChanged = $LastChanged->format(\DateTime::ATOM);
        }

        return $this;
    }

    /**
     * @return int
     */
    public function getLastChangedById()
    {
        return $this->LastChangedById;
    }

    /**
     * @param int $LastChangedById
     *
     * @return \Millennium\Soap\GCType
     */
    public function setLastChangedById($LastChangedById)
    {
        $this->LastChangedById = $LastChangedById;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     *
     * @return \Millennium\Soap\GCType
     */
    public function setName($Name)
    {
        $this->Name = $Name;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getValidFrom()
    {
        if ($this->ValidFrom == null) {
            return;
        } else {
            try {
                return new \DateTime($this->ValidFrom);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ValidFrom
     *
     * @return \Millennium\Soap\GCType
     */
    public function setValidFrom(\DateTime $ValidFrom = null)
    {
        if ($ValidFrom == null) {
            $this->ValidFrom = null;
        } else {
            $this->ValidFrom = $ValidFrom->format(\DateTime::ATOM);
        }

        return $this;
    }
}
