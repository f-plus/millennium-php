<?php

namespace FPlus\Millennium\Soap\Message;

class GetEmployees
{
    /**
     * @var int
     */
    protected $serviceId = null;

    /**
     * @param int $serviceId
     */
    public function __construct($serviceId)
    {
        $this->serviceId = $serviceId;
    }

    /**
     * @return int
     */
    public function getServiceId()
    {
        return $this->serviceId;
    }

    /**
     * @param int $serviceId
     *
     * @return \Millennium\Soap\GetEmployees
     */
    public function setServiceId($serviceId)
    {
        $this->serviceId = $serviceId;

        return $this;
    }
}
