<?php

namespace FPlus\Millennium\Model;

class ArrayOfCreditCardType
{
    /**
     * @var CreditCardType[]
     */
    protected $CreditCardType;

    public function __construct()
    {
    }

    /**
     * @return CreditCardType[]
     */
    public function getCreditCardType()
    {
        return $this->CreditCardType;
    }

    /**
     * @param CreditCardType[] $CreditCardType
     *
     * @return ArrayOfCreditCardType
     */
    public function setCreditCardType(array $CreditCardType = null)
    {
        $this->CreditCardType = $CreditCardType;

        return $this;
    }
}
