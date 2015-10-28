<?php

namespace FPlus\Millennium\Model;

class ClientCard
{
    /**
     * @var string
     */
    protected $AccountGUID = null;

    /**
     * @var string
     */
    protected $Address = null;

    /**
     * @var string
     */
    protected $CardCode = null;

    /**
     * @var int
     */
    protected $CardId = null;

    /**
     * @var string
     */
    protected $CardLast4Numbers = null;

    /**
     * @var string
     */
    protected $CardNumber = null;

    /**
     * @var int
     */
    protected $ClientId = null;

    /**
     * @var int
     */
    protected $ExpirationMonth = null;

    /**
     * @var int
     */
    protected $ExpirationYear = null;

    /**
     * @var int
     */
    protected $Id = null;

    /**
     * @var string
     */
    protected $NameOnCard = null;

    /**
     * @var string
     */
    protected $ZipCode = null;

    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getAccountGUID()
    {
        return $this->AccountGUID;
    }

    /**
     * @param string $AccountGUID
     *
     * @return \Millennium\Soap\ClientCard
     */
    public function setAccountGUID($AccountGUID)
    {
        $this->AccountGUID = $AccountGUID;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * @param string $Address
     *
     * @return \Millennium\Soap\ClientCard
     */
    public function setAddress($Address)
    {
        $this->Address = $Address;

        return $this;
    }

    /**
     * @return string
     */
    public function getCardCode()
    {
        return $this->CardCode;
    }

    /**
     * @param string $CardCode
     *
     * @return \Millennium\Soap\ClientCard
     */
    public function setCardCode($CardCode)
    {
        $this->CardCode = $CardCode;

        return $this;
    }

    /**
     * @return int
     */
    public function getCardId()
    {
        return $this->CardId;
    }

    /**
     * @param int $CardId
     *
     * @return \Millennium\Soap\ClientCard
     */
    public function setCardId($CardId)
    {
        $this->CardId = $CardId;

        return $this;
    }

    /**
     * @return string
     */
    public function getCardLast4Numbers()
    {
        return $this->CardLast4Numbers;
    }

    /**
     * @param string $CardLast4Numbers
     *
     * @return \Millennium\Soap\ClientCard
     */
    public function setCardLast4Numbers($CardLast4Numbers)
    {
        $this->CardLast4Numbers = $CardLast4Numbers;

        return $this;
    }

    /**
     * @return string
     */
    public function getCardNumber()
    {
        return $this->CardNumber;
    }

    /**
     * @param string $CardNumber
     *
     * @return \Millennium\Soap\ClientCard
     */
    public function setCardNumber($CardNumber)
    {
        $this->CardNumber = $CardNumber;

        return $this;
    }

    /**
     * @return int
     */
    public function getClientId()
    {
        return $this->ClientId;
    }

    /**
     * @param int $ClientId
     *
     * @return \Millennium\Soap\ClientCard
     */
    public function setClientId($ClientId)
    {
        $this->ClientId = $ClientId;

        return $this;
    }

    /**
     * @return int
     */
    public function getExpirationMonth()
    {
        return $this->ExpirationMonth;
    }

    /**
     * @param int $ExpirationMonth
     *
     * @return \Millennium\Soap\ClientCard
     */
    public function setExpirationMonth($ExpirationMonth)
    {
        $this->ExpirationMonth = $ExpirationMonth;

        return $this;
    }

    /**
     * @return int
     */
    public function getExpirationYear()
    {
        return $this->ExpirationYear;
    }

    /**
     * @param int $ExpirationYear
     *
     * @return \Millennium\Soap\ClientCard
     */
    public function setExpirationYear($ExpirationYear)
    {
        $this->ExpirationYear = $ExpirationYear;

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
     * @return \Millennium\Soap\ClientCard
     */
    public function setId($Id)
    {
        $this->Id = $Id;

        return $this;
    }

    /**
     * @return string
     */
    public function getNameOnCard()
    {
        return $this->NameOnCard;
    }

    /**
     * @param string $NameOnCard
     *
     * @return \Millennium\Soap\ClientCard
     */
    public function setNameOnCard($NameOnCard)
    {
        $this->NameOnCard = $NameOnCard;

        return $this;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
        return $this->ZipCode;
    }

    /**
     * @param string $ZipCode
     *
     * @return \Millennium\Soap\ClientCard
     */
    public function setZipCode($ZipCode)
    {
        $this->ZipCode = $ZipCode;

        return $this;
    }
}
