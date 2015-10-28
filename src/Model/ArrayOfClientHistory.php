<?php

namespace FPlus\Millennium\Model;

class ArrayOfClientHistory
{
    /**
     * @var ClientHistory[]
     */
    protected $ClientHistory = null;

    public function __construct()
    {
    }

    /**
     * @return ClientHistory[]
     */
    public function getClientHistory()
    {
        return $this->ClientHistory;
    }

    /**
     * @param ClientHistory[] $ClientHistory
     *
     * @return \Millennium\Soap\ArrayOfClientHistory
     */
    public function setClientHistory(array $ClientHistory = null)
    {
        $this->ClientHistory = $ClientHistory;

        return $this;
    }
}
