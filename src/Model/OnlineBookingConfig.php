<?php

namespace FPlus\Millennium\Model;

class OnlineBookingConfig
{
    /**
     * @var int
     */
    protected $ClientReferralId;

    /**
     * @var float
     */
    protected $DefaultGCAmount;

    /**
     * @var int
     */
    protected $DrawerId;

    /**
     * @var int
     */
    protected $GCAppointmentTypeId;

    /**
     * @var int
     */
    protected $GCReferralId;

    /**
     * @var int
     */
    protected $MerchantAccountId;

    /**
     * @var int
     */
    protected $NewRequestId;

    /**
     * @var int
     */
    protected $NonRequestId;

    /**
     * @var int
     */
    protected $RepeatRequestId;

    /**
     * @var int
     */
    protected $SellGCEmployeeId;

    /**
     * @var int
     */
    protected $SellGCType;

    /**
     * @var float
     */
    protected $ShippingFee;

    /**
     * @var int
     */
    protected $ShippingServiceId;

    /**
     * @var bool
     */
    protected $ValidateCC;

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
     * @return OnlineBookingConfig
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
     * @return OnlineBookingConfig
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
     * @return OnlineBookingConfig
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
     * @return OnlineBookingConfig
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
     * @return OnlineBookingConfig
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
     * @return OnlineBookingConfig
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
     * @return OnlineBookingConfig
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
     * @return OnlineBookingConfig
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
     * @return OnlineBookingConfig
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
     * @return OnlineBookingConfig
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
     * @return OnlineBookingConfig
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
     * @return OnlineBookingConfig
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
     * @return OnlineBookingConfig
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
     * @return OnlineBookingConfig
     */
    public function setValidateCC($ValidateCC)
    {
        $this->ValidateCC = $ValidateCC;

        return $this;
    }
}
