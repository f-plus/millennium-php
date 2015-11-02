<?php

namespace FPlus\Millennium\Model;

class ArrayOfClientHistory
{
    /**
     * @var ClientHistory[]
     */
    protected $ClientHistory;

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
     * @return ArrayOfClientHistory
     */
    public function setClientHistory(array $ClientHistory = null)
    {
        $this->ClientHistory = $ClientHistory;

        return $this;
    }
}
