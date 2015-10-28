<?php

namespace FPlus\Millennium\Model;

class ArrayOfClientCard
{
    /**
     * @var ClientCard[]
     */
    protected $ClientCard = null;

    public function __construct()
    {
    }

    /**
     * @return ClientCard[]
     */
    public function getClientCard()
    {
        return $this->ClientCard;
    }

    /**
     * @param ClientCard[] $ClientCard
     *
     * @return \Millennium\Soap\ArrayOfClientCard
     */
    public function setClientCard(array $ClientCard = null)
    {
        $this->ClientCard = $ClientCard;

        return $this;
    }
}
