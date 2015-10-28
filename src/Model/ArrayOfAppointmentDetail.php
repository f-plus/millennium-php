<?php

namespace FPlus\Millennium\Model;

class ArrayOfAppointmentDetail
{
    /**
     * @var AppointmentDetail[]
     */
    protected $AppointmentDetail = null;

    public function __construct()
    {
    }

    /**
     * @return AppointmentDetail[]
     */
    public function getAppointmentDetail()
    {
        return $this->AppointmentDetail;
    }

    /**
     * @param AppointmentDetail[] $AppointmentDetail
     *
     * @return \Millennium\Soap\ArrayOfAppointmentDetail
     */
    public function setAppointmentDetail(array $AppointmentDetail = null)
    {
        $this->AppointmentDetail = $AppointmentDetail;

        return $this;
    }
}
