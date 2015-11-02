<?php

namespace FPlus\Millennium\Model;

class Appointment extends BaseDTO
{
    /**
     * @var \DateTime
     */
    protected $AppointmentDate;

    /**
     * @var ArrayOfAppointmentDetail
     */
    protected $AppointmentDetails;

    /**
     * @var int
     */
    protected $BookedByLoginId;

    /**
     * @var \DateTime
     */
    protected $BookedOn;

    /**
     * @var bool
     */
    protected $BookedOnLine;

    /**
     * @var bool
     */
    protected $ChargeApptToRoom;

    /**
     * @var string
     */
    protected $ConfirmationTypes;

    /**
     * @var int
     */
    protected $Id;

    /**
     * @var bool
     */
    protected $IsClass;

    /**
     * @var \DateTime
     */
    protected $LastChanged;

    /**
     * @var int
     */
    protected $LastChangedByLoginId;

    /**
     * @var string
     */
    protected $Notes;

    /**
     * @var string
     */
    protected $PayingClient;

    /**
     * @var int
     */
    protected $PayingClientId;

    /**
     * @var bool
     */
    protected $PreBook;

    /**
     * @var int
     */
    protected $TotalTimeToBook;

    public function __construct()
    {
    }

    /**
     * @return \DateTime
     */
    public function getAppointmentDate()
    {
        if ($this->AppointmentDate == null) {
            return;
        } else {
            try {
                return new \DateTime($this->AppointmentDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $AppointmentDate
     *
     * @return Appointment
     */
    public function setAppointmentDate(\DateTime $AppointmentDate = null)
    {
        if ($AppointmentDate == null) {
            $this->AppointmentDate = null;
        } else {
            $this->AppointmentDate = $AppointmentDate->format(\DateTime::ATOM);
        }

        return $this;
    }

    /**
     * @return ArrayOfAppointmentDetail
     */
    public function getAppointmentDetails()
    {
        return $this->AppointmentDetails;
    }

    /**
     * @param ArrayOfAppointmentDetail $AppointmentDetails
     *
     * @return Appointment
     */
    public function setAppointmentDetails($AppointmentDetails)
    {
        $this->AppointmentDetails = $AppointmentDetails;

        return $this;
    }

    /**
     * @return int
     */
    public function getBookedByLoginId()
    {
        return $this->BookedByLoginId;
    }

    /**
     * @param int $BookedByLoginId
     *
     * @return Appointment
     */
    public function setBookedByLoginId($BookedByLoginId)
    {
        $this->BookedByLoginId = $BookedByLoginId;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBookedOn()
    {
        if ($this->BookedOn == null) {
            return;
        } else {
            try {
                return new \DateTime($this->BookedOn);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $BookedOn
     *
     * @return Appointment
     */
    public function setBookedOn(\DateTime $BookedOn = null)
    {
        if ($BookedOn == null) {
            $this->BookedOn = null;
        } else {
            $this->BookedOn = $BookedOn->format(\DateTime::ATOM);
        }

        return $this;
    }

    /**
     * @return bool
     */
    public function getBookedOnLine()
    {
        return $this->BookedOnLine;
    }

    /**
     * @param bool $BookedOnLine
     *
     * @return Appointment
     */
    public function setBookedOnLine($BookedOnLine)
    {
        $this->BookedOnLine = $BookedOnLine;

        return $this;
    }

    /**
     * @return bool
     */
    public function getChargeApptToRoom()
    {
        return $this->ChargeApptToRoom;
    }

    /**
     * @param bool $ChargeApptToRoom
     *
     * @return Appointment
     */
    public function setChargeApptToRoom($ChargeApptToRoom)
    {
        $this->ChargeApptToRoom = $ChargeApptToRoom;

        return $this;
    }

    /**
     * @return string
     */
    public function getConfirmationTypes()
    {
        return $this->ConfirmationTypes;
    }

    /**
     * @param string $ConfirmationTypes
     *
     * @return Appointment
     */
    public function setConfirmationTypes($ConfirmationTypes)
    {
        $this->ConfirmationTypes = $ConfirmationTypes;

        return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param int $Id
     *
     * @return Appointment
     */
    public function setId($Id)
    {
        $this->Id = $Id;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsClass()
    {
        return $this->IsClass;
    }

    /**
     * @param bool $IsClass
     *
     * @return Appointment
     */
    public function setIsClass($IsClass)
    {
        $this->IsClass = $IsClass;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastChanged()
    {
        if ($this->LastChanged == null) {
            return;
        } else {
            try {
                return new \DateTime($this->LastChanged);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $LastChanged
     *
     * @return Appointment
     */
    public function setLastChanged(\DateTime $LastChanged = null)
    {
        if ($LastChanged == null) {
            $this->LastChanged = null;
        } else {
            $this->LastChanged = $LastChanged->format(\DateTime::ATOM);
        }

        return $this;
    }

    /**
     * @return int
     */
    public function getLastChangedByLoginId()
    {
        return $this->LastChangedByLoginId;
    }

    /**
     * @param int $LastChangedByLoginId
     *
     * @return Appointment
     */
    public function setLastChangedByLoginId($LastChangedByLoginId)
    {
        $this->LastChangedByLoginId = $LastChangedByLoginId;

        return $this;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->Notes;
    }

    /**
     * @param string $Notes
     *
     * @return Appointment
     */
    public function setNotes($Notes)
    {
        $this->Notes = $Notes;

        return $this;
    }

    /**
     * @return string
     */
    public function getPayingClient()
    {
        return $this->PayingClient;
    }

    /**
     * @param string $PayingClient
     *
     * @return Appointment
     */
    public function setPayingClient($PayingClient)
    {
        $this->PayingClient = $PayingClient;

        return $this;
    }

    /**
     * @return int
     */
    public function getPayingClientId()
    {
        return $this->PayingClientId;
    }

    /**
     * @param int $PayingClientId
     *
     * @return Appointment
     */
    public function setPayingClientId($PayingClientId)
    {
        $this->PayingClientId = $PayingClientId;

        return $this;
    }

    /**
     * @return bool
     */
    public function getPreBook()
    {
        return $this->PreBook;
    }

    /**
     * @param bool $PreBook
     *
     * @return Appointment
     */
    public function setPreBook($PreBook)
    {
        $this->PreBook = $PreBook;

        return $this;
    }

    /**
     * @return int
     */
    public function getTotalTimeToBook()
    {
        return $this->TotalTimeToBook;
    }

    /**
     * @param int $TotalTimeToBook
     *
     * @return Appointment
     */
    public function setTotalTimeToBook($TotalTimeToBook)
    {
        $this->TotalTimeToBook = $TotalTimeToBook;

        return $this;
    }
}
