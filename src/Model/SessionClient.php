<?php

namespace FPlus\Millennium\Model;

use Ramsey\Uuid\Uuid;

class SessionClient
{
    const DATETIME_DEFAULT = '0001-01-01T00:00:00.0';

    /**
     * @var int
     */
    protected $ClientId;

    /**
     * @var \DateTime
     */
    protected $ConnectedOn;

    /**
     * @var string
     */
    protected $DataPath;

    /**
     * @var \DateTime
     */
    protected $ExpireOn;

    /**
     * @var string
     */
    protected $Id;

    public static function createWithDefaults()
    {
        $result = new self();
        $result->ClientId = '0';
        $result->ConnectedOn = self::DATETIME_DEFAULT;
        $result->DataPath = '';
        $result->ExpireOn = self::DATETIME_DEFAULT;
        $result->Id = Uuid::uuid4()->toString();

        return $result;
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
     * @return SessionClient
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
            return null;
        } else {
            return new \DateTime($this->ConnectedOn);
        }
    }

    /**
     * @param \DateTime $ConnectedOn
     *
     * @return SessionClient
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
     * @return SessionClient
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
            return null;
        } else {
            return new \DateTime($this->ExpireOn);
        }
    }

    /**
     * @param \DateTime $ExpireOn
     *
     * @return SessionClient
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
     * @return SessionClient
     */
    public function setId($Id)
    {
        $this->Id = $Id;

        return $this;
    }
}
