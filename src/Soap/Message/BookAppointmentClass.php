<?php

namespace FPlus\Millennium\Soap\Message;

class BookAppointmentClass
{
    /**
     * @var int
     */
    protected $clientId;

    /**
     * @var OpeningClass
     */
    protected $openingToBook;

    /**
     * @param int          $clientId
     * @param OpeningClass $openingToBook
     */
    public function __construct($clientId, $openingToBook)
    {
        $this->clientId = $clientId;
        $this->openingToBook = $openingToBook;
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
     * @return BookAppointmentClass
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * @return OpeningClass
     */
    public function getOpeningToBook()
    {
        return $this->openingToBook;
    }

    /**
     * @param OpeningClass $openingToBook
     *
     * @return BookAppointmentClass
     */
    public function setOpeningToBook($openingToBook)
    {
        $this->openingToBook = $openingToBook;

        return $this;
    }
}
