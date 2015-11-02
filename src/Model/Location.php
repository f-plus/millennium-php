<?php

namespace FPlus\Millennium\Model;

class Location
{
    /**
     * @var string
     */
    protected $DataPath;

    /**
     * @var int
     */
    protected $Id;

    /**
     * @var string
     */
    protected $Name;

    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getDataPath()
    {
        return $this->DataPath;
    }

    /**
     * @param string $DataPath
     *
     * @return Location
     */
    public function setDataPath($DataPath)
    {
        $this->DataPath = $DataPath;

        return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param int $Id
     *
     * @return Location
     */
    public function setId($Id)
    {
        $this->Id = $Id;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     *
     * @return Location
     */
    public function setName($Name)
    {
        $this->Name = $Name;

        return $this;
    }
}
