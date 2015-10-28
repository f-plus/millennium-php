<?php

namespace FPlus\Millennium\Soap\Message;

class BookAppointment
{
    /**
     * @var int
     */
    protected $clientId = null;

    /**
     * @var Opening
     */
    protected $openingToBook = null;

    /**
     * @param int     $clientId
     * @param Opening $openingToBook
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
     * @return \Millennium\Soap\BookAppointment
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * @return Opening
     */
    public function getOpeningToBook()
    {
        return $this->openingToBook;
    }

    /**
     * @param Opening $openingToBook
     *
     * @return \Millennium\Soap\BookAppointment
     */
    public function setOpeningToBook($openingToBook)
    {
        $this->openingToBook = $openingToBook;

        return $this;
    }
}
