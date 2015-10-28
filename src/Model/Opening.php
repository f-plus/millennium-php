<?php

namespace FPlus\Millennium\Model;

class Opening extends BaseDTO
{
    /**
     * @var int
     */
    protected $ChoiceNumber = null;

    /**
     * @var ArrayOfOpeningDetail
     */
    protected $Openings = null;

    /**
     * @var \DateTime
     */
    protected $StartDateTime = null;

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
     * @return \Millennium\Soap\Opening
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
     * @return \Millennium\Soap\Opening
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
     * @return \Millennium\Soap\Opening
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
