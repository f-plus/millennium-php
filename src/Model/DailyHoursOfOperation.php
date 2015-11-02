<?php

namespace FPlus\Millennium\Model;

class DailyHoursOfOperation
{
    /**
     * @var bool
     */
    protected $IsOpenElseClosed;

    /**
     * @var \DateTime
     */
    protected $TimeClose;

    /**
     * @var \DateTime
     */
    protected $TimeOpen;

    public function __construct()
    {
    }

    /**
     * @return bool
     */
    public function getIsOpenElseClosed()
    {
        return $this->IsOpenElseClosed;
    }

    /**
     * @param bool $IsOpenElseClosed
     *
     * @return DailyHoursOfOperation
     */
    public function setIsOpenElseClosed($IsOpenElseClosed)
    {
        $this->IsOpenElseClosed = $IsOpenElseClosed;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTimeClose()
    {
        if ($this->TimeClose == null) {
            return;
        } else {
            try {
                return new \DateTime($this->TimeClose);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $TimeClose
     *
     * @return DailyHoursOfOperation
     */
    public function setTimeClose(\DateTime $TimeClose = null)
    {
        if ($TimeClose == null) {
            $this->TimeClose = null;
        } else {
            $this->TimeClose = $TimeClose->format(\DateTime::ATOM);
        }

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTimeOpen()
    {
        if ($this->TimeOpen == null) {
            return;
        } else {
            try {
                return new \DateTime($this->TimeOpen);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $TimeOpen
     *
     * @return DailyHoursOfOperation
     */
    public function setTimeOpen(\DateTime $TimeOpen = null)
    {
        if ($TimeOpen == null) {
            $this->TimeOpen = null;
        } else {
            $this->TimeOpen = $TimeOpen->format(\DateTime::ATOM);
        }

        return $this;
    }
}
