<?php

namespace FPlus\Millennium\Soap\Message;

class BookAppointmentResponse
{
    /**
     * @var bool
     */
    protected $BookAppointmentResult;

    /**
     * @param bool $BookAppointmentResult
     */
    public function __construct($BookAppointmentResult)
    {
        $this->BookAppointmentResult = $BookAppointmentResult;
    }

    /**
     * @return bool
     */
    public function getBookAppointmentResult()
    {
        return $this->BookAppointmentResult;
    }

    /**
     * @param bool $BookAppointmentResult
     *
     * @return BookAppointmentResponse
     */
    public function setBookAppointmentResult($BookAppointmentResult)
    {
        $this->BookAppointmentResult = $BookAppointmentResult;

        return $this;
    }
}
