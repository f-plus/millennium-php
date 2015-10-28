<?php

namespace FPlus\Millennium\Soap\Message;

class GetGiftCertificatesResponse
{
    /**
     * @var ArrayOfGC
     */
    protected $GetGiftCertificatesResult = null;

    /**
     * @param ArrayOfGC $GetGiftCertificatesResult
     */
    public function __construct($GetGiftCertificatesResult)
    {
        $this->GetGiftCertificatesResult = $GetGiftCertificatesResult;
    }

    /**
     * @return ArrayOfGC
     */
    public function getGetGiftCertificatesResult()
    {
        return $this->GetGiftCertificatesResult;
    }

    /**
     * @param ArrayOfGC $GetGiftCertificatesResult
     *
     * @return \Millennium\Soap\GetGiftCertificatesResponse
     */
    public function setGetGiftCertificatesResult($GetGiftCertificatesResult)
    {
        $this->GetGiftCertificatesResult = $GetGiftCertificatesResult;

        return $this;
    }
}
