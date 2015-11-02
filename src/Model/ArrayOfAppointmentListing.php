<?php

namespace FPlus\Millennium\Model;

class ArrayOfAppointmentListing
{
    /**
     * @var AppointmentListing[]
     */
    protected $AppointmentListing;

    public function __construct()
    {
    }

    /**
     * @return AppointmentListing[]
     */
    public function getAppointmentListing()
    {
        return $this->AppointmentListing;
    }

    /**
     * @param AppointmentListing[] $AppointmentListing
     *
     * @return ArrayOfAppointmentListing
     */
    public function setAppointmentListing(array $AppointmentListing = null)
    {
        $this->AppointmentListing = $AppointmentListing;

        return $this;
    }
}
