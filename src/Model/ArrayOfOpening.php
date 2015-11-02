<?php

namespace FPlus\Millennium\Model;

class ArrayOfOpening
{
    /**
     * @var Opening[]
     */
    protected $Opening;

    public function __construct()
    {
    }

    /**
     * @return Opening[]
     */
    public function getOpening()
    {
        return $this->Opening;
    }

    /**
     * @param Opening[] $Opening
     *
     * @return ArrayOfOpening
     */
    public function setOpening(array $Opening = null)
    {
        $this->Opening = $Opening;

        return $this;
    }
}
