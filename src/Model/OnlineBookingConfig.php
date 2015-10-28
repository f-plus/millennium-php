<?php

namespace FPlus\Millennium\Model;

class OnlineBookingConfig
{
    /**
     * @var int
     */
    protected $ClientReferralId = null;

    /**
     * @var float
     */
    protected $DefaultGCAmount = null;

    /**
     * @var int
     */
    protected $DrawerId = null;

    /**
     * @var int
     */
    protected $GCAppointmentTypeId = null;

    /**
     * @var int
     */
    protected $GCReferralId = null;

    /**
     * @var int
     */
    protected $MerchantAccountId = null;

    /**
     * @var int
     */
    protected $NewRequestId = null;

    /**
     * @var int
     */
    protected $NonRequestId = null;

    /**
     * @var int
     */
    protected $RepeatRequestId = null;

    /**
     * @var int
     */
    protected $SellGCEmployeeId = null;

    /**
     * @var int
     */
    protected $SellGCType = null;

    /**
     * @var float
     */
    protected $ShippingFee = null;

    /**
     * @var int
     */
    protected $ShippingServiceId = null;

    /**
     * @var bool
     */
    protected $ValidateCC = null;

    public function __construct()
    {
    }

    /**
     * @return int
     */
    public function getClientReferralId()
    {
        return $this->ClientReferralId;
    }

    /**
     * @param int $ClientReferralId
     *
     * @return \Millennium\Soap\OnlineBookingConfig
     */
    public function setClientReferralId($ClientReferralId)
    {
        $this->ClientReferralId = $ClientReferralId;

        return $this;
    }

    /**
     * @return float
     */
    public function getDefaultGCAmount()
    {
        return $this->DefaultGCAmount;
    }

    /**
     * @param float $DefaultGCAmount
     *
     * @return \Millennium\Soap\OnlineBookingConfig
     */
    public function setDefaultGCAmount($DefaultGCAmount)
    {
        $this->DefaultGCAmount = $DefaultGCAmount;

        return $this;
    }

    /**
     * @return int
     */
    public function getDrawerId()
    {
        return $this->DrawerId;
    }

    /**
     * @param int $DrawerId
     *
     * @return \Millennium\Soap\OnlineBookingConfig
     */
    public function setDrawerId($DrawerId)
    {
        $this->DrawerId = $DrawerId;

        return $this;
    }

    /**
     * @return int
     */
    public function getGCAppointmentTypeId()
    {
        return $this->GCAppointmentTypeId;
    }

    /**
     * @param int $GCAppointmentTypeId
     *
     * @return \Millennium\Soap\OnlineBookingConfig
     */
    public function setGCAppointmentTypeId($GCAppointmentTypeId)
    {
        $this->GCAppointmentTypeId = $GCAppointmentTypeId;

        return $this;
    }

    /**
     * @return int
     */
    public function getGCReferralId()
    {
        return $this->GCReferralId;
    }

    /**
     * @param int $GCReferralId
     *
     * @return \Millennium\Soap\OnlineBookingConfig
     */
    public function setGCReferralId($GCReferralId)
    {
        $this->GCReferralId = $GCReferralId;

        return $this;
    }

    /**
     * @return int
     */
    public function getMerchantAccountId()
    {
        return $this->MerchantAccountId;
    }

    /**
     * @param int $MerchantAccountId
     *
     * @return \Millennium\Soap\OnlineBookingConfig
     */
    public function setMerchantAccountId($MerchantAccountId)
    {
        $this->MerchantAccountId = $MerchantAccountId;

        return $this;
    }

    /**
     * @return int
     */
    public function getNewRequestId()
    {
        return $this->NewRequestId;
    }

    /**
     * @param int $NewRequestId
     *
     * @return \Millennium\Soap\OnlineBookingConfig
     */
    public function setNewRequestId($NewRequestId)
    {
        $this->NewRequestId = $NewRequestId;

        return $this;
    }

    /**
     * @return int
     */
    public function getNonRequestId()
    {
        return $this->NonRequestId;
    }

    /**
     * @param int $NonRequestId
     *
     * @return \Millennium\Soap\OnlineBookingConfig
     */
    public function setNonRequestId($NonRequestId)
    {
        $this->NonRequestId = $NonRequestId;

        return $this;
    }

    /**
     * @return int
     */
    public function getRepeatRequestId()
    {
        return $this->RepeatRequestId;
    }

    /**
     * @param int $RepeatRequestId
     *
     * @return \Millennium\Soap\OnlineBookingConfig
     */
    public function setRepeatRequestId($RepeatRequestId)
    {
        $this->RepeatRequestId = $RepeatRequestId;

        return $this;
    }

    /**
     * @return int
     */
    public function getSellGCEmployeeId()
    {
        return $this->SellGCEmployeeId;
    }

    /**
     * @param int $SellGCEmployeeId
     *
     * @return \Millennium\Soap\OnlineBookingConfig
     */
    public function setSellGCEmployeeId($SellGCEmployeeId)
    {
        $this->SellGCEmployeeId = $SellGCEmployeeId;

        return $this;
    }

    /**
     * @return int
     */
    public function getSellGCType()
    {
        return $this->SellGCType;
    }

    /**
     * @param int $SellGCType
     *
     * @return \Millennium\Soap\OnlineBookingConfig
     */
    public function setSellGCType($SellGCType)
    {
        $this->SellGCType = $SellGCType;

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
     * @return \Millennium\Soap\OnlineBookingConfig
     */
    public function setShippingFee($ShippingFee)
    {
        $this->ShippingFee = $ShippingFee;

        return $this;
    }

    /**
     * @return int
     */
    public function getShippingServiceId()
    {
        return $this->ShippingServiceId;
    }

    /**
     * @param int $ShippingServiceId
     *
     * @return \Millennium\Soap\OnlineBookingConfig
     */
    public function setShippingServiceId($ShippingServiceId)
    {
        $this->ShippingServiceId = $ShippingServiceId;

        return $this;
    }

    /**
     * @return bool
     */
    public function getValidateCC()
    {
        return $this->ValidateCC;
    }

    /**
     * @param bool $ValidateCC
     *
     * @return \Millennium\Soap\OnlineBookingConfig
     */
    public function setValidateCC($ValidateCC)
    {
        $this->ValidateCC = $ValidateCC;

        return $this;
    }
}
