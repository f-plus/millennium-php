<?php

namespace FPlus\Millennium\Model;

class ArrayOfAppointment
{
    /**
     * @var Appointment[]
     */
    protected $Appointment;

    public function __construct()
    {
    }

    /**
     * @return Appointment[]
     */
    public function getAppointment()
    {
        return $this->Appointment;
    }

    /**
     * @param Appointment[] $Appointment
     *
     * @return ArrayOfAppointment
     */
    public function setAppointment(array $Appointment = null)
    {
        $this->Appointment = $Appointment;

        return $this;
    }
}
