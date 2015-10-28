<?php

namespace FPlus\Millennium\Soap\Message;

class GetServices
{
    /**
     * @var int
     */
    protected $classId = null;

    /**
     * @param int $classId
     */
    public function __construct($classId)
    {
        $this->classId = $classId;
    }

    /**
     * @return int
     */
    public function getClassId()
    {
        return $this->classId;
    }

    /**
     * @param int $classId
     *
     * @return \Millennium\Soap\GetServices
     */
    public function setClassId($classId)
    {
        $this->classId = $classId;

        return $this;
    }
}
