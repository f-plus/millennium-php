<?php

namespace FPlus\Millennium\Model;

class ClientCard
{
    /**
     * @var string
     */
    protected $AccountGUID;

    /**
     * @var string
     */
    protected $Address;

    /**
     * @var string
     */
    protected $CardCode;

    /**
     * @var int
     */
    protected $CardId;

    /**
     * @var string
     */
    protected $CardLast4Numbers;

    /**
     * @var string
     */
    protected $CardNumber;

    /**
     * @var int
     */
    protected $ClientId;

    /**
     * @var int
     */
    protected $ExpirationMonth;

    /**
     * @var int
     */
    protected $ExpirationYear;

    /**
     * @var int
     */
    protected $Id;

    /**
     * @var string
     */
    protected $NameOnCard;

    /**
     * @var string
     */
    protected $ZipCode;

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
     * @return ClientCard
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
     * @return ClientCard
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
     * @return ClientCard
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
     * @return ClientCard
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
     * @return ClientCard
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
     * @return ClientCard
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
     * @return ClientCard
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
     * @return ClientCard
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
     * @return ClientCard
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
     * @return ClientCard
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
     * @return ClientCard
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
     * @return ClientCard
     */
    public function setZipCode($ZipCode)
    {
        $this->ZipCode = $ZipCode;

        return $this;
    }
}
