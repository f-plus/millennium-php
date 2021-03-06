<?php

namespace FPlus\Millennium\Soap\Message;

class GetServices
{
    /**
     * @var int
     */
    protected $classId;

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
     * @return GetServices
     */
    public function setClassId($classId)
    {
        $this->classId = $classId;

        return $this;
    }
}
