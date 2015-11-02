<?php

namespace FPlus\Millennium\Model;

class ClientHistory
{
    /**
     * @var int
     */
    protected $AppointmentTypeId;

    /**
     * @var int
     */
    protected $ClientId;

    /**
     * @var \DateTime
     */
    protected $DateTime;

    /**
     * @var string
     */
    protected $Description;

    /**
     * @var int
     */
    protected $EmployeeId;

    /**
     * @var string
     */
    protected $EmployeeName;

    /**
     * @var int
     */
    protected $HeaderId;

    /**
     * @var string
     */
    protected $InvoiceNumber;

    /**
     * @var int
     */
    protected $PackageId;

    /**
     * @var int
     */
    protected $PrdSvrId;

    /**
     * @var float
     */
    protected $Price;

    /**
     * @var float
     */
    protected $Quantity;

    /**
     * @var int
     */
    protected $TransactionId;

    /**
     * @var string
     */
    protected $Type;

    /**
     * @var bool
     */
    protected $Voided;

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
     * @return ClientHistory
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
     * @return ClientHistory
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
     * @return ClientHistory
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
     * @return ClientHistory
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
     * @return ClientHistory
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
     * @return ClientHistory
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
     * @return ClientHistory
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
     * @return ClientHistory
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
     * @return ClientHistory
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
     * @return ClientHistory
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
     * @return ClientHistory
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
     * @return ClientHistory
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
     * @return ClientHistory
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
     * @return ClientHistory
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
     * @return ClientHistory
     */
    public function setVoided($Voided)
    {
        $this->Voided = $Voided;

        return $this;
    }
}
