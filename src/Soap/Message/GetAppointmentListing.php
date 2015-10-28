<?php

namespace FPlus\Millennium\Soap\Message;

class GetAppointmentListing
{
    /**
     * @var int
     */
    protected $clientId = null;

    /**
     * @var \DateTime
     */
    protected $startDate = null;

    /**
     * @var \DateTime
     */
    protected $endDate = null;

    /**
     * @var bool
     */
    protected $rebookOnline = null;

    /**
     * @param int       $clientId
     * @param \DateTime $startDate
     * @param \DateTime $endDate
     * @param bool      $rebookOnline
     */
    public function __construct($clientId, \DateTime $startDate, \DateTime $endDate, $rebookOnline)
    {
        $this->clientId = $clientId;
        $this->startDate = $startDate->format(\DateTime::ATOM);
        $this->endDate = $endDate->format(\DateTime::ATOM);
        $this->rebookOnline = $rebookOnline;
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
     * @return \Millennium\Soap\GetAppointmentListing
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
            return;
        } else {
            try {
                return new \DateTime($this->startDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $startDate
     *
     * @return \Millennium\Soap\GetAppointmentListing
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
            return;
        } else {
            try {
                return new \DateTime($this->endDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $endDate
     *
     * @return \Millennium\Soap\GetAppointmentListing
     */
    public function setEndDate(\DateTime $endDate)
    {
        $this->endDate = $endDate->format(\DateTime::ATOM);

        return $this;
    }

    /**
     * @return bool
     */
    public function getRebookOnline()
    {
        return $this->rebookOnline;
    }

    /**
     * @param bool $rebookOnline
     *
     * @return \Millennium\Soap\GetAppointmentListing
     */
    public function setRebookOnline($rebookOnline)
    {
        $this->rebookOnline = $rebookOnline;

        return $this;
    }
}
