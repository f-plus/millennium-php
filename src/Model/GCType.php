<?php

namespace FPlus\Millennium\Model;

class GCType extends BaseDTO
{
    /**
     * @var \DateTime
     */
    protected $CreatedOn;

    /**
     * @var float
     */
    protected $DefaultPrice;

    /**
     * @var float
     */
    protected $DefaultValue;

    /**
     * @var int
     */
    protected $ExpireWeeks;

    /**
     * @var int
     */
    protected $Id;

    /**
     * @var bool
     */
    protected $Inactive;

    /**
     * @var \DateTime
     */
    protected $LastChanged;

    /**
     * @var int
     */
    protected $LastChangedById;

    /**
     * @var string
     */
    protected $Name;

    /**
     * @var \DateTime
     */
    protected $ValidFrom;

    public function __construct()
    {
    }

    /**
     * @return \DateTime
     */
    public function getCreatedOn()
    {
        if ($this->CreatedOn == null) {
            return null;
        } else {
            return new \DateTime($this->CreatedOn);
        }
    }

    /**
     * @param \DateTime $CreatedOn
     *
     * @return GCType
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
     * @return GCType
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
     * @return GCType
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
     * @return GCType
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
     * @return GCType
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
     * @return GCType
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
            return null;
        } else {
            return new \DateTime($this->LastChanged);
        }
    }

    /**
     * @param \DateTime $LastChanged
     *
     * @return GCType
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
     * @return GCType
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
     * @return GCType
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
            return null;
        } else {
            return new \DateTime($this->ValidFrom);
        }
    }

    /**
     * @param \DateTime $ValidFrom
     *
     * @return GCType
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
