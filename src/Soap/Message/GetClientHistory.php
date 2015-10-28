<?php

namespace FPlus\Millennium\Soap\Message;

class GetClientHistory
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
     * @return \Millennium\Soap\GetClientHistory
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
     * @return \Millennium\Soap\GetClientHistory
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
     * @return \Millennium\Soap\GetClientHistory
     */
    public function setEndDate(\DateTime $endDate)
    {
        $this->endDate = $endDate->format(\DateTime::ATOM);

        return $this;
    }
}
