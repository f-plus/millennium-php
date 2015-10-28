<?php

namespace FPlus\Millennium\Model;

class CreditCardType
{
    /**
     * @var string
     */
    protected $Code = null;

    /**
     * @var string
     */
    protected $DisplayName = null;

    /**
     * @var int
     */
    protected $Id = null;

    /**
     * @var string
     */
    protected $Logo = null;

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
     * @return \Millennium\Soap\CreditCardType
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
     * @return \Millennium\Soap\CreditCardType
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
     * @return \Millennium\Soap\CreditCardType
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
     * @return \Millennium\Soap\CreditCardType
     */
    public function setLogo($Logo)
    {
        $this->Logo = $Logo;

        return $this;
    }
}
