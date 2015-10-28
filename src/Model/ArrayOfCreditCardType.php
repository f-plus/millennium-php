<?php

namespace FPlus\Millennium\Model;

class ArrayOfCreditCardType
{
    /**
     * @var CreditCardType[]
     */
    protected $CreditCardType = null;

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
     * @return \Millennium\Soap\ArrayOfCreditCardType
     */
    public function setCreditCardType(array $CreditCardType = null)
    {
        $this->CreditCardType = $CreditCardType;

        return $this;
    }
}
