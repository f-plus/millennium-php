<?php

namespace FPlus\Millennium\Model;

class ArrayOfClientCard
{
    /**
     * @var ClientCard[]
     */
    protected $ClientCard;

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
     * @return ArrayOfClientCard
     */
    public function setClientCard(array $ClientCard = null)
    {
        $this->ClientCard = $ClientCard;

        return $this;
    }
}
