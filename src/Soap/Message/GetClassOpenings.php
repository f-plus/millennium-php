<?php

namespace FPlus\Millennium\Soap\Message;

class GetClassOpenings
{
    /**
     * @var ScanHeader
     */
    protected $scanOptions;

    /**
     * @param ScanHeader $scanOptions
     */
    public function __construct($scanOptions)
    {
        $this->scanOptions = $scanOptions;
    }

    /**
     * @return ScanHeader
     */
    public function getScanOptions()
    {
        return $this->scanOptions;
    }

    /**
     * @param ScanHeader $scanOptions
     *
     * @return GetClassOpenings
     */
    public function setScanOptions($scanOptions)
    {
        $this->scanOptions = $scanOptions;

        return $this;
    }
}
