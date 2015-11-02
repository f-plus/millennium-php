<?php

namespace FPlus\Millennium\Soap\Message;

class GetClientAppointmentsResponse
{
    /**
     * @var ArrayOfAppointment
     */
    protected $GetClientAppointmentsResult;

    /**
     * @param ArrayOfAppointment $GetClientAppointmentsResult
     */
    public function __construct($GetClientAppointmentsResult)
    {
        $this->GetClientAppointmentsResult = $GetClientAppointmentsResult;
    }

    /**
     * @return ArrayOfAppointment
     */
    public function getGetClientAppointmentsResult()
    {
        return $this->GetClientAppointmentsResult;
    }

    /**
     * @param ArrayOfAppointment $GetClientAppointmentsResult
     *
     * @return GetClientAppointmentsResponse
     */
    public function setGetClientAppointmentsResult($GetClientAppointmentsResult)
    {
        $this->GetClientAppointmentsResult = $GetClientAppointmentsResult;

        return $this;
    }
}
