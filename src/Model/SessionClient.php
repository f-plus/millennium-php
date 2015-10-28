<?php

namespace FPlus\Millennium\Model;

class SessionClient
{
    /**
     * @var int
     */
    protected $ClientId = null;

    /**
     * @var \DateTime
     */
    protected $ConnectedOn = null;

    /**
     * @var string
     */
    protected $DataPath = null;

    /**
     * @var \DateTime
     */
    protected $ExpireOn = null;

    /**
     * @var string
     */
    protected $Id = null;

    public function __construct()
    {
    }

    /**
     * @return int
     */
    public function getClientId()
    {
        return $this->ClientId;
    }

    /**
     * @param int $ClientId
     *
     * @return \Millennium\Soap\SessionClient
     */
    public function setClientId($ClientId)
    {
        $this->ClientId = $ClientId;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getConnectedOn()
    {
        if ($this->ConnectedOn == null) {
            return;
        } else {
            try {
                return new \DateTime($this->ConnectedOn);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ConnectedOn
     *
     * @return \Millennium\Soap\SessionClient
     */
    public function setConnectedOn(\DateTime $ConnectedOn = null)
    {
        if ($ConnectedOn == null) {
            $this->ConnectedOn = null;
        } else {
            $this->ConnectedOn = $ConnectedOn->format(\DateTime::ATOM);
        }

        return $this;
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
     * @return \Millennium\Soap\SessionClient
     */
    public function setDataPath($DataPath)
    {
        $this->DataPath = $DataPath;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpireOn()
    {
        if ($this->ExpireOn == null) {
            return;
        } else {
            try {
                return new \DateTime($this->ExpireOn);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ExpireOn
     *
     * @return \Millennium\Soap\SessionClient
     */
    public function setExpireOn(\DateTime $ExpireOn = null)
    {
        if ($ExpireOn == null) {
            $this->ExpireOn = null;
        } else {
            $this->ExpireOn = $ExpireOn->format(\DateTime::ATOM);
        }

        return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param string $Id
     *
     * @return \Millennium\Soap\SessionClient
     */
    public function setId($Id)
    {
        $this->Id = $Id;

        return $this;
    }
}
