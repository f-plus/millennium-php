<?php

namespace FPlus\Millennium\Model;

class Location
{
    /**
     * @var string
     */
    protected $DataPath = null;

    /**
     * @var int
     */
    protected $Id = null;

    /**
     * @var string
     */
    protected $Name = null;

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
     * @return \Millennium\Soap\Location
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
     * @return \Millennium\Soap\Location
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
     * @return \Millennium\Soap\Location
     */
    public function setName($Name)
    {
        $this->Name = $Name;

        return $this;
    }
}
