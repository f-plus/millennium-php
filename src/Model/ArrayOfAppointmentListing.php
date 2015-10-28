<?php

namespace FPlus\Millennium\Model;

class ArrayOfAppointmentListing
{
    /**
     * @var AppointmentListing[]
     */
    protected $AppointmentListing = null;

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
     * @return \Millennium\Soap\ArrayOfAppointmentListing
     */
    public function setAppointmentListing(array $AppointmentListing = null)
    {
        $this->AppointmentListing = $AppointmentListing;

        return $this;
    }
}
