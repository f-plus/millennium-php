<?php

namespace FPlus\Millennium\Model;

class ArrayOfScanDetail
{
    /**
     * @var ScanDetail[]
     */
    protected $ScanDetail = null;

    public function __construct()
    {
    }

    /**
     * @return ScanDetail[]
     */
    public function getScanDetail()
    {
        return $this->ScanDetail;
    }

    /**
     * @param ScanDetail[] $ScanDetail
     *
     * @return \Millennium\Soap\ArrayOfScanDetail
     */
    public function setScanDetail(array $ScanDetail = null)
    {
        $this->ScanDetail = $ScanDetail;

        return $this;
    }
}
