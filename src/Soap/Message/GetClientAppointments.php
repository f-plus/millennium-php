<?php

namespace FPlus\Millennium\Soap\Message;

class GetClientAppointments
{
    /**
     * @var int
     */
    protected $clientId;

    /**
     * @var \DateTime
     */
    protected $startDate;

    /**
     * @var \DateTime
     */
    protected $endDate;

    /**
     * @param int       $clientId
     * @param \DateTime $startDate
     * @param \DateTime $endDate
     */
    public function __construct($clientId, \DateTime $startDate, \DateTime $endDate)
    {
        $this->clientId = $clientId;
        $this->startDate = $startDate->format(\DateTime::ATOM);
        $this->endDate = $endDate->format(\DateTime::ATOM);
    }

    /**
     * @return int
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * @param int $clientId
     *
     * @return GetClientAppointments
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        if ($this->startDate == null) {
            return null;
        } else {
            return new \DateTime($this->startDate);
        }
    }

    /**
     * @param \DateTime $startDate
     *
     * @return GetClientAppointments
     */
    public function setStartDate(\DateTime $startDate)
    {
        $this->startDate = $startDate->format(\DateTime::ATOM);

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        if ($this->endDate == null) {
            return null;
        } else {
            return new \DateTime($this->endDate);
        }
    }

    /**
     * @param \DateTime $endDate
     *
     * @return GetClientAppointments
     */
    public function setEndDate(\DateTime $endDate)
    {
        $this->endDate = $endDate->format(\DateTime::ATOM);

        return $this;
    }
}
