<?php

namespace FPlus\Millennium\Model;

class ArrayOfGCClient
{
    /**
     * @var GCClient[]
     */
    protected $GCClient = null;

    public function __construct()
    {
    }

    /**
     * @return GCClient[]
     */
    public function getGCClient()
    {
        return $this->GCClient;
    }

    /**
     * @param GCClient[] $GCClient
     *
     * @return \Millennium\Soap\ArrayOfGCClient
     */
    public function setGCClient(array $GCClient = null)
    {
        $this->GCClient = $GCClient;

        return $this;
    }
}
