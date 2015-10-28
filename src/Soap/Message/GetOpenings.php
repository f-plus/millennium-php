<?php

namespace FPlus\Millennium\Soap\Message;

class GetOpenings
{
    /**
     * @var ScanHeader
     */
    protected $scanOptions = null;

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
     * @return \Millennium\Soap\GetOpenings
     */
    public function setScanOptions($scanOptions)
    {
        $this->scanOptions = $scanOptions;

        return $this;
    }
}
