<?php

namespace FPlus\Millennium\Model;

class Opening extends BaseDTO
{
    /**
     * @var int
     */
    protected $ChoiceNumber;

    /**
     * @var ArrayOfOpeningDetail
     */
    protected $Openings;

    /**
     * @var \DateTime
     */
    protected $StartDateTime;

    public function __construct()
    {
    }

    /**
     * @return int
     */
    public function getChoiceNumber()
    {
        return $this->ChoiceNumber;
    }

    /**
     * @param int $ChoiceNumber
     *
     * @return Opening
     */
    public function setChoiceNumber($ChoiceNumber)
    {
        $this->ChoiceNumber = $ChoiceNumber;

        return $this;
    }

    /**
     * @return ArrayOfOpeningDetail
     */
    public function getOpenings()
    {
        return $this->Openings;
    }

    /**
     * @param ArrayOfOpeningDetail $Openings
     *
     * @return Opening
     */
    public function setOpenings($Openings)
    {
        $this->Openings = $Openings;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDateTime()
    {
        if ($this->StartDateTime == null) {
            return;
        } else {
            try {
                return new \DateTime($this->StartDateTime);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $StartDateTime
     *
     * @return Opening
     */
    public function setStartDateTime(\DateTime $StartDateTime = null)
    {
        if ($StartDateTime == null) {
            $this->StartDateTime = null;
        } else {
            $this->StartDateTime = $StartDateTime->format(\DateTime::ATOM);
        }

        return $this;
    }
}
