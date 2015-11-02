<?php

namespace FPlus\Millennium\Soap\Message;

class GetCrediCardTypesResponse
{
    /**
     * @var ArrayOfCreditCardType
     */
    protected $GetCrediCardTypesResult;

    /**
     * @param ArrayOfCreditCardType $GetCrediCardTypesResult
     */
    public function __construct($GetCrediCardTypesResult)
    {
        $this->GetCrediCardTypesResult = $GetCrediCardTypesResult;
    }

    /**
     * @return ArrayOfCreditCardType
     */
    public function getGetCrediCardTypesResult()
    {
        return $this->GetCrediCardTypesResult;
    }

    /**
     * @param ArrayOfCreditCardType $GetCrediCardTypesResult
     *
     * @return GetCrediCardTypesResponse
     */
    public function setGetCrediCardTypesResult($GetCrediCardTypesResult)
    {
        $this->GetCrediCardTypesResult = $GetCrediCardTypesResult;

        return $this;
    }
}
