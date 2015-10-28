<?php

namespace FPlus\Millennium\Model;

class ClientHistory
{
    /**
     * @var int
     */
    protected $AppointmentTypeId = null;

    /**
     * @var int
     */
    protected $ClientId = null;

    /**
     * @var \DateTime
     */
    protected $DateTime = null;

    /**
     * @var string
     */
    protected $Description = null;

    /**
     * @var int
     */
    protected $EmployeeId = null;

    /**
     * @var string
     */
    protected $EmployeeName = null;

    /**
     * @var int
     */
    protected $HeaderId = null;

    /**
     * @var string
     */
    protected $InvoiceNumber = null;

    /**
     * @var int
     */
    protected $PackageId = null;

    /**
     * @var int
     */
    protected $PrdSvrId = null;

    /**
     * @var float
     */
    protected $Price = null;

    /**
     * @var float
     */
    protected $Quantity = null;

    /**
     * @var int
     */
    protected $TransactionId = null;

    /**
     * @var string
     */
    protected $Type = null;

    /**
     * @var bool
     */
    protected $Voided = null;

    public function __construct()
    {
    }

    /**
     * @return int
     */
    public function getAppointmentTypeId()
    {
        return $this->AppointmentTypeId;
    }

    /**
     * @param int $AppointmentTypeId
     *
     * @return \Millennium\Soap\ClientHistory
     */
    public function setAppointmentTypeId($AppointmentTypeId)
    {
        $this->AppointmentTypeId = $AppointmentTypeId;

        return $this;
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
     * @return \Millennium\Soap\ClientHistory
     */
    public function setClientId($ClientId)
    {
        $this->ClientId = $ClientId;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateTime()
    {
        if ($this->DateTime == null) {
            return;
        } else {
            try {
                return new \DateTime($this->DateTime);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $DateTime
     *
     * @return \Millennium\Soap\ClientHistory
     */
    public function setDateTime(\DateTime $DateTime = null)
    {
        if ($DateTime == null) {
            $this->DateTime = null;
        } else {
            $this->DateTime = $DateTime->format(\DateTime::ATOM);
        }

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     *
     * @return \Millennium\Soap\ClientHistory
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;

        return $this;
    }

    /**
     * @return int
     */
    public function getEmployeeId()
    {
        return $this->EmployeeId;
    }

    /**
     * @param int $EmployeeId
     *
     * @return \Millennium\Soap\ClientHistory
     */
    public function setEmployeeId($EmployeeId)
    {
        $this->EmployeeId = $EmployeeId;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmployeeName()
    {
        return $this->EmployeeName;
    }

    /**
     * @param string $EmployeeName
     *
     * @return \Millennium\Soap\ClientHistory
     */
    public function setEmployeeName($EmployeeName)
    {
        $this->EmployeeName = $EmployeeName;

        return $this;
    }

    /**
     * @return int
     */
    public function getHeaderId()
    {
        return $this->HeaderId;
    }

    /**
     * @param int $HeaderId
     *
     * @return \Millennium\Soap\ClientHistory
     */
    public function setHeaderId($HeaderId)
    {
        $this->HeaderId = $HeaderId;

        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->InvoiceNumber;
    }

    /**
     * @param string $InvoiceNumber
     *
     * @return \Millennium\Soap\ClientHistory
     */
    public function setInvoiceNumber($InvoiceNumber)
    {
        $this->InvoiceNumber = $InvoiceNumber;

        return $this;
    }

    /**
     * @return int
     */
    public function getPackageId()
    {
        return $this->PackageId;
    }

    /**
     * @param int $PackageId
     *
     * @return \Millennium\Soap\ClientHistory
     */
    public function setPackageId($PackageId)
    {
        $this->PackageId = $PackageId;

        return $this;
    }

    /**
     * @return int
     */
    public function getPrdSvrId()
    {
        return $this->PrdSvrId;
    }

    /**
     * @param int $PrdSvrId
     *
     * @return \Millennium\Soap\ClientHistory
     */
    public function setPrdSvrId($PrdSvrId)
    {
        $this->PrdSvrId = $PrdSvrId;

        return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * @param float $Price
     *
     * @return \Millennium\Soap\ClientHistory
     */
    public function setPrice($Price)
    {
        $this->Price = $Price;

        return $this;
    }

    /**
     * @return float
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * @param float $Quantity
     *
     * @return \Millennium\Soap\ClientHistory
     */
    public function setQuantity($Quantity)
    {
        $this->Quantity = $Quantity;

        return $this;
    }

    /**
     * @return int
     */
    public function getTransactionId()
    {
        return $this->TransactionId;
    }

    /**
     * @param int $TransactionId
     *
     * @return \Millennium\Soap\ClientHistory
     */
    public function setTransactionId($TransactionId)
    {
        $this->TransactionId = $TransactionId;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param string $Type
     *
     * @return \Millennium\Soap\ClientHistory
     */
    public function setType($Type)
    {
        $this->Type = $Type;

        return $this;
    }

    /**
     * @return bool
     */
    public function getVoided()
    {
        return $this->Voided;
    }

    /**
     * @param bool $Voided
     *
     * @return \Millennium\Soap\ClientHistory
     */
    public function setVoided($Voided)
    {
        $this->Voided = $Voided;

        return $this;
    }
}
