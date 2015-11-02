<?php

namespace FPlus\Millennium\Model;

class GCClient extends GC
{
    /**
     * @var string
     */
    protected $Address1;

    /**
     * @var string
     */
    protected $Address2;

    /**
     * @var string
     */
    protected $City;

    /**
     * @var string
     */
    protected $GCTypeName;

    /**
     * @var MailType
     */
    protected $MailTo;

    /**
     * @var string
     */
    protected $PurchForAreadCode;

    /**
     * @var string
     */
    protected $PurchForEmail;

    /**
     * @var string
     */
    protected $PurchForFirstName;

    /**
     * @var string
     */
    protected $PurchForLastName;

    /**
     * @var string
     */
    protected $PurchForPhoneNumber;

    /**
     * @var Sex
     */
    protected $PurchForSex;

    /**
     * @var string
     */
    protected $PurchaseForMessage;

    /**
     * @var PurchaseForType
     */
    protected $PurchaseForType;

    /**
     * @var string
     */
    protected $PurchaseFrom;

    /**
     * @var string
     */
    protected $PurchaseTo;

    /**
     * @var float
     */
    protected $ShippingFee;

    /**
     * @var string
     */
    protected $State;

    /**
     * @var string
     */
    protected $ZipCode;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return string
     */
    public function getAddress1()
    {
        return $this->Address1;
    }

    /**
     * @param string $Address1
     *
     * @return GCClient
     */
    public function setAddress1($Address1)
    {
        $this->Address1 = $Address1;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddress2()
    {
        return $this->Address2;
    }

    /**
     * @param string $Address2
     *
     * @return GCClient
     */
    public function setAddress2($Address2)
    {
        $this->Address2 = $Address2;

        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param string $City
     *
     * @return GCClient
     */
    public function setCity($City)
    {
        $this->City = $City;

        return $this;
    }

    /**
     * @return string
     */
    public function getGCTypeName()
    {
        return $this->GCTypeName;
    }

    /**
     * @param string $GCTypeName
     *
     * @return GCClient
     */
    public function setGCTypeName($GCTypeName)
    {
        $this->GCTypeName = $GCTypeName;

        return $this;
    }

    /**
     * @return MailType
     */
    public function getMailTo()
    {
        return $this->MailTo;
    }

    /**
     * @param MailType $MailTo
     *
     * @return GCClient
     */
    public function setMailTo($MailTo)
    {
        $this->MailTo = $MailTo;

        return $this;
    }

    /**
     * @return string
     */
    public function getPurchForAreadCode()
    {
        return $this->PurchForAreadCode;
    }

    /**
     * @param string $PurchForAreadCode
     *
     * @return GCClient
     */
    public function setPurchForAreadCode($PurchForAreadCode)
    {
        $this->PurchForAreadCode = $PurchForAreadCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getPurchForEmail()
    {
        return $this->PurchForEmail;
    }

    /**
     * @param string $PurchForEmail
     *
     * @return GCClient
     */
    public function setPurchForEmail($PurchForEmail)
    {
        $this->PurchForEmail = $PurchForEmail;

        return $this;
    }

    /**
     * @return string
     */
    public function getPurchForFirstName()
    {
        return $this->PurchForFirstName;
    }

    /**
     * @param string $PurchForFirstName
     *
     * @return GCClient
     */
    public function setPurchForFirstName($PurchForFirstName)
    {
        $this->PurchForFirstName = $PurchForFirstName;

        return $this;
    }

    /**
     * @return string
     */
    public function getPurchForLastName()
    {
        return $this->PurchForLastName;
    }

    /**
     * @param string $PurchForLastName
     *
     * @return GCClient
     */
    public function setPurchForLastName($PurchForLastName)
    {
        $this->PurchForLastName = $PurchForLastName;

        return $this;
    }

    /**
     * @return string
     */
    public function getPurchForPhoneNumber()
    {
        return $this->PurchForPhoneNumber;
    }

    /**
     * @param string $PurchForPhoneNumber
     *
     * @return GCClient
     */
    public function setPurchForPhoneNumber($PurchForPhoneNumber)
    {
        $this->PurchForPhoneNumber = $PurchForPhoneNumber;

        return $this;
    }

    /**
     * @return Sex
     */
    public function getPurchForSex()
    {
        return $this->PurchForSex;
    }

    /**
     * @param Sex $PurchForSex
     *
     * @return GCClient
     */
    public function setPurchForSex($PurchForSex)
    {
        $this->PurchForSex = $PurchForSex;

        return $this;
    }

    /**
     * @return string
     */
    public function getPurchaseForMessage()
    {
        return $this->PurchaseForMessage;
    }

    /**
     * @param string $PurchaseForMessage
     *
     * @return GCClient
     */
    public function setPurchaseForMessage($PurchaseForMessage)
    {
        $this->PurchaseForMessage = $PurchaseForMessage;

        return $this;
    }

    /**
     * @return PurchaseForType
     */
    public function getPurchaseForType()
    {
        return $this->PurchaseForType;
    }

    /**
     * @param PurchaseForType $PurchaseForType
     *
     * @return GCClient
     */
    public function setPurchaseForType($PurchaseForType)
    {
        $this->PurchaseForType = $PurchaseForType;

        return $this;
    }

    /**
     * @return string
     */
    public function getPurchaseFrom()
    {
        return $this->PurchaseFrom;
    }

    /**
     * @param string $PurchaseFrom
     *
     * @return GCClient
     */
    public function setPurchaseFrom($PurchaseFrom)
    {
        $this->PurchaseFrom = $PurchaseFrom;

        return $this;
    }

    /**
     * @return string
     */
    public function getPurchaseTo()
    {
        return $this->PurchaseTo;
    }

    /**
     * @param string $PurchaseTo
     *
     * @return GCClient
     */
    public function setPurchaseTo($PurchaseTo)
    {
        $this->PurchaseTo = $PurchaseTo;

        return $this;
    }

    /**
     * @return float
     */
    public function getShippingFee()
    {
        return $this->ShippingFee;
    }

    /**
     * @param float $ShippingFee
     *
     * @return GCClient
     */
    public function setShippingFee($ShippingFee)
    {
        $this->ShippingFee = $ShippingFee;

        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->State;
    }

    /**
     * @param string $State
     *
     * @return GCClient
     */
    public function setState($State)
    {
        $this->State = $State;

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
     * @return GCClient
     */
    public function setZipCode($ZipCode)
    {
        $this->ZipCode = $ZipCode;

        return $this;
    }
}
