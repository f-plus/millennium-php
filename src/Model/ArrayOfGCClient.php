<?php

namespace FPlus\Millennium\Model;

class ArrayOfGCClient
{
    /**
     * @var GCClient[]
     */
    protected $GCClient;

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
     * @return ArrayOfGCClient
     */
    public function setGCClient(array $GCClient = null)
    {
        $this->GCClient = $GCClient;

        return $this;
    }
}
