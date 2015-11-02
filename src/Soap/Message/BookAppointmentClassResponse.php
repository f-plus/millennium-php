<?php

namespace FPlus\Millennium\Soap\Message;

class BookAppointmentClassResponse
{
    /**
     * @var bool
     */
    protected $BookAppointmentClassResult;

    /**
     * @param bool $BookAppointmentClassResult
     */
    public function __construct($BookAppointmentClassResult)
    {
        $this->BookAppointmentClassResult = $BookAppointmentClassResult;
    }

    /**
     * @return bool
     */
    public function getBookAppointmentClassResult()
    {
        return $this->BookAppointmentClassResult;
    }

    /**
     * @param bool $BookAppointmentClassResult
     *
     * @return BookAppointmentClassResponse
     */
    public function setBookAppointmentClassResult($BookAppointmentClassResult)
    {
        $this->BookAppointmentClassResult = $BookAppointmentClassResult;

        return $this;
    }
}
