<?php

namespace FPlus\Millennium\Model;

class ArrayOfMembershipSaleDetail
{
    /**
     * @var MembershipSaleDetail[]
     */
    protected $MembershipSaleDetail = null;

    public function __construct()
    {
    }

    /**
     * @return MembershipSaleDetail[]
     */
    public function getMembershipSaleDetail()
    {
        return $this->MembershipSaleDetail;
    }

    /**
     * @param MembershipSaleDetail[] $MembershipSaleDetail
     *
     * @return \Millennium\Soap\ArrayOfMembershipSaleDetail
     */
    public function setMembershipSaleDetail(array $MembershipSaleDetail = null)
    {
        $this->MembershipSaleDetail = $MembershipSaleDetail;

        return $this;
    }
}
