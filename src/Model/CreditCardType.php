<?php

namespace FPlus\Millennium\Model;

class CreditCardType
{
    /**
     * @var string
     */
    protected $Code;

    /**
     * @var string
     */
    protected $DisplayName;

    /**
     * @var int
     */
    protected $Id;

    /**
     * @var string
     */
    protected $Logo;

    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param string $Code
     *
     * @return CreditCardType
     */
    public function setCode($Code)
    {
        $this->Code = $Code;

        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->DisplayName;
    }

    /**
     * @param string $DisplayName
     *
     * @return CreditCardType
     */
    public function setDisplayName($DisplayName)
    {
        $this->DisplayName = $DisplayName;

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
     * @return CreditCardType
     */
    public function setId($Id)
    {
        $this->Id = $Id;

        return $this;
    }

    /**
     * @return string
     */
    public function getLogo()
    {
        return $this->Logo;
    }

    /**
     * @param string $Logo
     *
     * @return CreditCardType
     */
    public function setLogo($Logo)
    {
        $this->Logo = $Logo;

        return $this;
    }
}
