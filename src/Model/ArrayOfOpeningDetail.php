<?php

namespace FPlus\Millennium\Model;

class ArrayOfOpeningDetail
{
    /**
     * @var OpeningDetail[]
     */
    protected $OpeningDetail = null;

    public function __construct()
    {
    }

    /**
     * @return OpeningDetail[]
     */
    public function getOpeningDetail()
    {
        return $this->OpeningDetail;
    }

    /**
     * @param OpeningDetail[] $OpeningDetail
     *
     * @return \Millennium\Soap\ArrayOfOpeningDetail
     */
    public function setOpeningDetail(array $OpeningDetail = null)
    {
        $this->OpeningDetail = $OpeningDetail;

        return $this;
    }
}
