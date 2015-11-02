<?php

namespace FPlus\Millennium\Soap\Message;

class GetAppointmentListingResponse
{
    /**
     * @var ArrayOfAppointmentListing
     */
    protected $GetAppointmentListingResult;

    /**
     * @param ArrayOfAppointmentListing $GetAppointmentListingResult
     */
    public function __construct($GetAppointmentListingResult)
    {
        $this->GetAppointmentListingResult = $GetAppointmentListingResult;
    }

    /**
     * @return ArrayOfAppointmentListing
     */
    public function getGetAppointmentListingResult()
    {
        return $this->GetAppointmentListingResult;
    }

    /**
     * @param ArrayOfAppointmentListing $GetAppointmentListingResult
     *
     * @return GetAppointmentListingResponse
     */
    public function setGetAppointmentListingResult($GetAppointmentListingResult)
    {
        $this->GetAppointmentListingResult = $GetAppointmentListingResult;

        return $this;
    }
}
