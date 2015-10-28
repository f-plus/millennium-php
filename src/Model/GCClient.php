<?php

namespace FPlus\Millennium\Model;

class GCClient extends GC
{
    /**
     * @var string
     */
    protected $Address1 = null;

    /**
     * @var string
     */
    protected $Address2 = null;

    /**
     * @var string
     */
    protected $City = null;

    /**
     * @var string
     */
    protected $GCTypeName = null;

    /**
     * @var MailType
     */
    protected $MailTo = null;

    /**
     * @var string
     */
    protected $PurchForAreadCode = null;

    /**
     * @var string
     */
    protected $PurchForEmail = null;

    /**
     * @var string
     */
    protected $PurchForFirstName = null;

    /**
     * @var string
     */
    protected $PurchForLastName = null;

    /**
     * @var string
     */
    protected $PurchForPhoneNumber = null;

    /**
     * @var Sex
     */
    protected $PurchForSex = null;

    /**
     * @var string
     */
    protected $PurchaseForMessage = null;

    /**
     * @var PurchaseForType
     */
    protected $PurchaseForType = null;

    /**
     * @var string
     */
    protected $PurchaseFrom = null;

    /**
     * @var string
     */
    protected $PurchaseTo = null;

    /**
     * @var float
     */
    protected $ShippingFee = null;

    /**
     * @var string
     */
    protected $State = null;

    /**
     * @var string
     */
    protected $ZipCode = null;

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
     * @return \Millennium\Soap\GCClient
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
     * @return \Millennium\Soap\GCClient
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
     * @return \Millennium\Soap\GCClient
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
     * @return \Millennium\Soap\GCClient
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
     * @return \Millennium\Soap\GCClient
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
     * @return \Millennium\Soap\GCClient
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
     * @return \Millennium\Soap\GCClient
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
     * @return \Millennium\Soap\GCClient
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
     * @return \Millennium\Soap\GCClient
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
     * @return \Millennium\Soap\GCClient
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
     * @return \Millennium\Soap\GCClient
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
     * @return \Millennium\Soap\GCClient
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
     * @return \Millennium\Soap\GCClient
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
     * @return \Millennium\Soap\GCClient
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
     * @return \Millennium\Soap\GCClient
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
     * @return \Millennium\Soap\GCClient
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
     * @return \Millennium\Soap\GCClient
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
     * @return \Millennium\Soap\GCClient
     */
    public function setZipCode($ZipCode)
    {
        $this->ZipCode = $ZipCode;

        return $this;
    }
}
