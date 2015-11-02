<?php

namespace FPlus\Millennium\Model;

class ArrayOfScanDetail
{
    /**
     * @var ScanDetail[]
     */
    protected $ScanDetail;

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
     * @return ArrayOfScanDetail
     */
    public function setScanDetail(array $ScanDetail = null)
    {
        $this->ScanDetail = $ScanDetail;

        return $this;
    }
}
