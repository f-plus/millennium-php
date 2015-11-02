<?php

namespace FPlus\Millennium\Model;

class Client extends BaseDTO
{
    /**
     * @var string
     */
    protected $Address1;

    /**
     * @var string
     */
    protected $Address2;

    /**
     * @var bool
     */
    protected $AllowAccountCharge;

    /**
     * @var bool
     */
    protected $AllowPoints;

    /**
     * @var \DateTime
     */
    protected $AnniversaryDate;

    /**
     * @var \DateTime
     */
    protected $Birthday;

    /**
     * @var string
     */
    protected $BusinessAreaCode;

    /**
     * @var string
     */
    protected $BusinessExtension;

    /**
     * @var string
     */
    protected $BusinessPhoneNumber;

    /**
     * @var bool
     */
    protected $CanBookApptsOnline;

    /**
     * @var bool
     */
    protected $CanViewApptsOnline;

    /**
     * @var string
     */
    protected $CellAreaCode;

    /**
     * @var string
     */
    protected $CellPhoneNumber;

    /**
     * @var bool
     */
    protected $ChecksAllowed;

    /**
     * @var string
     */
    protected $City;

    /**
     * @var bool
     */
    protected $ConfirmAppointments;

    /**
     * @var int
     */
    protected $ConfirmDaysInAdvance;

    /**
     * @var bool
     */
    protected $ConfirmViaAutoConfirmation;

    /**
     * @var bool
     */
    protected $ConfirmViaBusinessPhone;

    /**
     * @var bool
     */
    protected $ConfirmViaCellPhone;

    /**
     * @var bool
     */
    protected $ConfirmViaEmail;

    /**
     * @var bool
     */
    protected $ConfirmViaFax;

    /**
     * @var bool
     */
    protected $ConfirmViaHomePhone;

    /**
     * @var bool
     */
    protected $ConfirmViaSMS;

    /**
     * @var string
     */
    protected $ConfirmationSequence;

    /**
     * @var float
     */
    protected $CreditLimit;

    /**
     * @var \DateTime
     */
    protected $DateCreated;

    /**
     * @var bool
     */
    protected $DisplayNotesInAppointmentBook;

    /**
     * @var bool
     */
    protected $DisplayNotesInRegister;

    /**
     * @var bool
     */
    protected $DisplayUDFInAppointmentBook;

    /**
     * @var bool
     */
    protected $DisplayUDFInRegister;

    /**
     * @var string
     */
    protected $DotNetPassword;

    /**
     * @var string
     */
    protected $EmailAddress;

    /**
     * @var string
     */
    protected $FaxAreaCode;

    /**
     * @var string
     */
    protected $FaxPhoneNumber;

    /**
     * @var string
     */
    protected $FirstName;

    /**
     * @var \DateTime
     */
    protected $FirstVisitDate;

    /**
     * @var int
     */
    protected $GuestId;

    /**
     * @var bool
     */
    protected $HasChildren;

    /**
     * @var bool
     */
    protected $HasCreditCardOnFile;

    /**
     * @var bool
     */
    protected $HasMemberships;

    /**
     * @var string
     */
    protected $HomeAreaCode;

    /**
     * @var string
     */
    protected $HomePhoneNumber;

    /**
     * @var string
     */
    protected $HotelRoomNumber;

    /**
     * @var int
     */
    protected $Id;

    /**
     * @var bool
     */
    protected $IsCreditCardValid;

    /**
     * @var bool
     */
    protected $IsInactive;

    /**
     * @var bool
     */
    protected $IsMarried;

    /**
     * @var bool
     */
    protected $IsNonDeliverableAddress;

    /**
     * @var bool
     */
    protected $IsPrimaryResidence;

    /**
     * @var \DateTime
     */
    protected $LastChangedDateTime;

    /**
     * @var string
     */
    protected $LastName;

    /**
     * @var \DateTime
     */
    protected $LastVisitDate;

    /**
     * @var string
     */
    protected $LicenseNumber;

    /**
     * @var \DateTime
     */
    protected $MemberExpirationDate;

    /**
     * @var \DateTime
     */
    protected $MemberSince;

    /**
     * @var MemberStatus
     */
    protected $MemberStatus;

    /**
     * @var MembershipSale
     */
    protected $Membership;

    /**
     * @var MembershipBilling
     */
    protected $MembershipBillingType;

    /**
     * @var int
     */
    protected $MembershipId;

    /**
     * @var string
     */
    protected $MembershipName;

    /**
     * @var float
     */
    protected $NextPaymentAmount;

    /**
     * @var \DateTime
     */
    protected $NextPaymentDate;

    /**
     * @var bool
     */
    protected $NoMailingsAllowed;

    /**
     * @var string
     */
    protected $Notes;

    /**
     * @var int
     */
    protected $NumberOfVisits;

    /**
     * @var int
     */
    protected $Points;

    /**
     * @var string
     */
    protected $PostalSortCode;

    /**
     * @var int
     */
    protected $PrimaryEmployeeId;

    /**
     * @var int
     */
    protected $ProfessionId;

    /**
     * @var int
     */
    protected $ReferralTypeId;

    /**
     * @var int
     */
    protected $ReferredByClientId;

    /**
     * @var bool
     */
    protected $Restricted;

    /**
     * @var bool
     */
    protected $SendEmails;

    /**
     * @var bool
     */
    protected $SendSMS;

    /**
     * @var Sex
     */
    protected $Sex;

    /**
     * @var string
     */
    protected $State;

    /**
     * @var int
     */
    protected $TermId;

    /**
     * @var string
     */
    protected $ZipCode;

    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getAddress1()
    {
        return $this->Address1;
    }

    /**
     * @param string $Address1
     *
     * @return Client
     */
    public function setAddress1($Address1)
    {
        $this->Address1 = $Address1;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddress2()
    {
        return $this->Address2;
    }

    /**
     * @param string $Address2
     *
     * @return Client
     */
    public function setAddress2($Address2)
    {
        $this->Address2 = $Address2;

        return $this;
    }

    /**
     * @return bool
     */
    public function getAllowAccountCharge()
    {
        return $this->AllowAccountCharge;
    }

    /**
     * @param bool $AllowAccountCharge
     *
     * @return Client
     */
    public function setAllowAccountCharge($AllowAccountCharge)
    {
        $this->AllowAccountCharge = $AllowAccountCharge;

        return $this;
    }

    /**
     * @return bool
     */
    public function getAllowPoints()
    {
        return $this->AllowPoints;
    }

    /**
     * @param bool $AllowPoints
     *
     * @return Client
     */
    public function setAllowPoints($AllowPoints)
    {
        $this->AllowPoints = $AllowPoints;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getAnniversaryDate()
    {
        if ($this->AnniversaryDate == null) {
            return;
        } else {
            try {
                return new \DateTime($this->AnniversaryDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $AnniversaryDate
     *
     * @return Client
     */
    public function setAnniversaryDate(\DateTime $AnniversaryDate = null)
    {
        if ($AnniversaryDate == null) {
            $this->AnniversaryDate = null;
        } else {
            $this->AnniversaryDate = $AnniversaryDate->format(\DateTime::ATOM);
        }

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBirthday()
    {
        if ($this->Birthday == null) {
            return;
        } else {
            try {
                return new \DateTime($this->Birthday);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $Birthday
     *
     * @return Client
     */
    public function setBirthday(\DateTime $Birthday = null)
    {
        if ($Birthday == null) {
            $this->Birthday = null;
        } else {
            $this->Birthday = $Birthday->format(\DateTime::ATOM);
        }

        return $this;
    }

    /**
     * @return string
     */
    public function getBusinessAreaCode()
    {
        return $this->BusinessAreaCode;
    }

    /**
     * @param string $BusinessAreaCode
     *
     * @return Client
     */
    public function setBusinessAreaCode($BusinessAreaCode)
    {
        $this->BusinessAreaCode = $BusinessAreaCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getBusinessExtension()
    {
        return $this->BusinessExtension;
    }

    /**
     * @param string $BusinessExtension
     *
     * @return Client
     */
    public function setBusinessExtension($BusinessExtension)
    {
        $this->BusinessExtension = $BusinessExtension;

        return $this;
    }

    /**
     * @return string
     */
    public function getBusinessPhoneNumber()
    {
        return $this->BusinessPhoneNumber;
    }

    /**
     * @param string $BusinessPhoneNumber
     *
     * @return Client
     */
    public function setBusinessPhoneNumber($BusinessPhoneNumber)
    {
        $this->BusinessPhoneNumber = $BusinessPhoneNumber;

        return $this;
    }

    /**
     * @return bool
     */
    public function getCanBookApptsOnline()
    {
        return $this->CanBookApptsOnline;
    }

    /**
     * @param bool $CanBookApptsOnline
     *
     * @return Client
     */
    public function setCanBookApptsOnline($CanBookApptsOnline)
    {
        $this->CanBookApptsOnline = $CanBookApptsOnline;

        return $this;
    }

    /**
     * @return bool
     */
    public function getCanViewApptsOnline()
    {
        return $this->CanViewApptsOnline;
    }

    /**
     * @param bool $CanViewApptsOnline
     *
     * @return Client
     */
    public function setCanViewApptsOnline($CanViewApptsOnline)
    {
        $this->CanViewApptsOnline = $CanViewApptsOnline;

        return $this;
    }

    /**
     * @return string
     */
    public function getCellAreaCode()
    {
        return $this->CellAreaCode;
    }

    /**
     * @param string $CellAreaCode
     *
     * @return Client
     */
    public function setCellAreaCode($CellAreaCode)
    {
        $this->CellAreaCode = $CellAreaCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getCellPhoneNumber()
    {
        return $this->CellPhoneNumber;
    }

    /**
     * @param string $CellPhoneNumber
     *
     * @return Client
     */
    public function setCellPhoneNumber($CellPhoneNumber)
    {
        $this->CellPhoneNumber = $CellPhoneNumber;

        return $this;
    }

    /**
     * @return bool
     */
    public function getChecksAllowed()
    {
        return $this->ChecksAllowed;
    }

    /**
     * @param bool $ChecksAllowed
     *
     * @return Client
     */
    public function setChecksAllowed($ChecksAllowed)
    {
        $this->ChecksAllowed = $ChecksAllowed;

        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param string $City
     *
     * @return Client
     */
    public function setCity($City)
    {
        $this->City = $City;

        return $this;
    }

    /**
     * @return bool
     */
    public function getConfirmAppointments()
    {
        return $this->ConfirmAppointments;
    }

    /**
     * @param bool $ConfirmAppointments
     *
     * @return Client
     */
    public function setConfirmAppointments($ConfirmAppointments)
    {
        $this->ConfirmAppointments = $ConfirmAppointments;

        return $this;
    }

    /**
     * @return int
     */
    public function getConfirmDaysInAdvance()
    {
        return $this->ConfirmDaysInAdvance;
    }

    /**
     * @param int $ConfirmDaysInAdvance
     *
     * @return Client
     */
    public function setConfirmDaysInAdvance($ConfirmDaysInAdvance)
    {
        $this->ConfirmDaysInAdvance = $ConfirmDaysInAdvance;

        return $this;
    }

    /**
     * @return bool
     */
    public function getConfirmViaAutoConfirmation()
    {
        return $this->ConfirmViaAutoConfirmation;
    }

    /**
     * @param bool $ConfirmViaAutoConfirmation
     *
     * @return Client
     */
    public function setConfirmViaAutoConfirmation($ConfirmViaAutoConfirmation)
    {
        $this->ConfirmViaAutoConfirmation = $ConfirmViaAutoConfirmation;

        return $this;
    }

    /**
     * @return bool
     */
    public function getConfirmViaBusinessPhone()
    {
        return $this->ConfirmViaBusinessPhone;
    }

    /**
     * @param bool $ConfirmViaBusinessPhone
     *
     * @return Client
     */
    public function setConfirmViaBusinessPhone($ConfirmViaBusinessPhone)
    {
        $this->ConfirmViaBusinessPhone = $ConfirmViaBusinessPhone;

        return $this;
    }

    /**
     * @return bool
     */
    public function getConfirmViaCellPhone()
    {
        return $this->ConfirmViaCellPhone;
    }

    /**
     * @param bool $ConfirmViaCellPhone
     *
     * @return Client
     */
    public function setConfirmViaCellPhone($ConfirmViaCellPhone)
    {
        $this->ConfirmViaCellPhone = $ConfirmViaCellPhone;

        return $this;
    }

    /**
     * @return bool
     */
    public function getConfirmViaEmail()
    {
        return $this->ConfirmViaEmail;
    }

    /**
     * @param bool $ConfirmViaEmail
     *
     * @return Client
     */
    public function setConfirmViaEmail($ConfirmViaEmail)
    {
        $this->ConfirmViaEmail = $ConfirmViaEmail;

        return $this;
    }

    /**
     * @return bool
     */
    public function getConfirmViaFax()
    {
        return $this->ConfirmViaFax;
    }

    /**
     * @param bool $ConfirmViaFax
     *
     * @return Client
     */
    public function setConfirmViaFax($ConfirmViaFax)
    {
        $this->ConfirmViaFax = $ConfirmViaFax;

        return $this;
    }

    /**
     * @return bool
     */
    public function getConfirmViaHomePhone()
    {
        return $this->ConfirmViaHomePhone;
    }

    /**
     * @param bool $ConfirmViaHomePhone
     *
     * @return Client
     */
    public function setConfirmViaHomePhone($ConfirmViaHomePhone)
    {
        $this->ConfirmViaHomePhone = $ConfirmViaHomePhone;

        return $this;
    }

    /**
     * @return bool
     */
    public function getConfirmViaSMS()
    {
        return $this->ConfirmViaSMS;
    }

    /**
     * @param bool $ConfirmViaSMS
     *
     * @return Client
     */
    public function setConfirmViaSMS($ConfirmViaSMS)
    {
        $this->ConfirmViaSMS = $ConfirmViaSMS;

        return $this;
    }

    /**
     * @return string
     */
    public function getConfirmationSequence()
    {
        return $this->ConfirmationSequence;
    }

    /**
     * @param string $ConfirmationSequence
     *
     * @return Client
     */
    public function setConfirmationSequence($ConfirmationSequence)
    {
        $this->ConfirmationSequence = $ConfirmationSequence;

        return $this;
    }

    /**
     * @return float
     */
    public function getCreditLimit()
    {
        return $this->CreditLimit;
    }

    /**
     * @param float $CreditLimit
     *
     * @return Client
     */
    public function setCreditLimit($CreditLimit)
    {
        $this->CreditLimit = $CreditLimit;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateCreated()
    {
        if ($this->DateCreated == null) {
            return;
        } else {
            try {
                return new \DateTime($this->DateCreated);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $DateCreated
     *
     * @return Client
     */
    public function setDateCreated(\DateTime $DateCreated = null)
    {
        if ($DateCreated == null) {
            $this->DateCreated = null;
        } else {
            $this->DateCreated = $DateCreated->format(\DateTime::ATOM);
        }

        return $this;
    }

    /**
     * @return bool
     */
    public function getDisplayNotesInAppointmentBook()
    {
        return $this->DisplayNotesInAppointmentBook;
    }

    /**
     * @param bool $DisplayNotesInAppointmentBook
     *
     * @return Client
     */
    public function setDisplayNotesInAppointmentBook($DisplayNotesInAppointmentBook)
    {
        $this->DisplayNotesInAppointmentBook = $DisplayNotesInAppointmentBook;

        return $this;
    }

    /**
     * @return bool
     */
    public function getDisplayNotesInRegister()
    {
        return $this->DisplayNotesInRegister;
    }

    /**
     * @param bool $DisplayNotesInRegister
     *
     * @return Client
     */
    public function setDisplayNotesInRegister($DisplayNotesInRegister)
    {
        $this->DisplayNotesInRegister = $DisplayNotesInRegister;

        return $this;
    }

    /**
     * @return bool
     */
    public function getDisplayUDFInAppointmentBook()
    {
        return $this->DisplayUDFInAppointmentBook;
    }

    /**
     * @param bool $DisplayUDFInAppointmentBook
     *
     * @return Client
     */
    public function setDisplayUDFInAppointmentBook($DisplayUDFInAppointmentBook)
    {
        $this->DisplayUDFInAppointmentBook = $DisplayUDFInAppointmentBook;

        return $this;
    }

    /**
     * @return bool
     */
    public function getDisplayUDFInRegister()
    {
        return $this->DisplayUDFInRegister;
    }

    /**
     * @param bool $DisplayUDFInRegister
     *
     * @return Client
     */
    public function setDisplayUDFInRegister($DisplayUDFInRegister)
    {
        $this->DisplayUDFInRegister = $DisplayUDFInRegister;

        return $this;
    }

    /**
     * @return string
     */
    public function getDotNetPassword()
    {
        return $this->DotNetPassword;
    }

    /**
     * @param string $DotNetPassword
     *
     * @return Client
     */
    public function setDotNetPassword($DotNetPassword)
    {
        $this->DotNetPassword = $DotNetPassword;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->EmailAddress;
    }

    /**
     * @param string $EmailAddress
     *
     * @return Client
     */
    public function setEmailAddress($EmailAddress)
    {
        $this->EmailAddress = $EmailAddress;

        return $this;
    }

    /**
     * @return string
     */
    public function getFaxAreaCode()
    {
        return $this->FaxAreaCode;
    }

    /**
     * @param string $FaxAreaCode
     *
     * @return Client
     */
    public function setFaxAreaCode($FaxAreaCode)
    {
        $this->FaxAreaCode = $FaxAreaCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getFaxPhoneNumber()
    {
        return $this->FaxPhoneNumber;
    }

    /**
     * @param string $FaxPhoneNumber
     *
     * @return Client
     */
    public function setFaxPhoneNumber($FaxPhoneNumber)
    {
        $this->FaxPhoneNumber = $FaxPhoneNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * @param string $FirstName
     *
     * @return Client
     */
    public function setFirstName($FirstName)
    {
        $this->FirstName = $FirstName;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFirstVisitDate()
    {
        if ($this->FirstVisitDate == null) {
            return;
        } else {
            try {
                return new \DateTime($this->FirstVisitDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $FirstVisitDate
     *
     * @return Client
     */
    public function setFirstVisitDate(\DateTime $FirstVisitDate = null)
    {
        if ($FirstVisitDate == null) {
            $this->FirstVisitDate = null;
        } else {
            $this->FirstVisitDate = $FirstVisitDate->format(\DateTime::ATOM);
        }

        return $this;
    }

    /**
     * @return int
     */
    public function getGuestId()
    {
        return $this->GuestId;
    }

    /**
     * @param int $GuestId
     *
     * @return Client
     */
    public function setGuestId($GuestId)
    {
        $this->GuestId = $GuestId;

        return $this;
    }

    /**
     * @return bool
     */
    public function getHasChildren()
    {
        return $this->HasChildren;
    }

    /**
     * @param bool $HasChildren
     *
     * @return Client
     */
    public function setHasChildren($HasChildren)
    {
        $this->HasChildren = $HasChildren;

        return $this;
    }

    /**
     * @return bool
     */
    public function getHasCreditCardOnFile()
    {
        return $this->HasCreditCardOnFile;
    }

    /**
     * @param bool $HasCreditCardOnFile
     *
     * @return Client
     */
    public function setHasCreditCardOnFile($HasCreditCardOnFile)
    {
        $this->HasCreditCardOnFile = $HasCreditCardOnFile;

        return $this;
    }

    /**
     * @return bool
     */
    public function getHasMemberships()
    {
        return $this->HasMemberships;
    }

    /**
     * @param bool $HasMemberships
     *
     * @return Client
     */
    public function setHasMemberships($HasMemberships)
    {
        $this->HasMemberships = $HasMemberships;

        return $this;
    }

    /**
     * @return string
     */
    public function getHomeAreaCode()
    {
        return $this->HomeAreaCode;
    }

    /**
     * @param string $HomeAreaCode
     *
     * @return Client
     */
    public function setHomeAreaCode($HomeAreaCode)
    {
        $this->HomeAreaCode = $HomeAreaCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getHomePhoneNumber()
    {
        return $this->HomePhoneNumber;
    }

    /**
     * @param string $HomePhoneNumber
     *
     * @return Client
     */
    public function setHomePhoneNumber($HomePhoneNumber)
    {
        $this->HomePhoneNumber = $HomePhoneNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getHotelRoomNumber()
    {
        return $this->HotelRoomNumber;
    }

    /**
     * @param string $HotelRoomNumber
     *
     * @return Client
     */
    public function setHotelRoomNumber($HotelRoomNumber)
    {
        $this->HotelRoomNumber = $HotelRoomNumber;

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
     * @return Client
     */
    public function setId($Id)
    {
        $this->Id = $Id;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsCreditCardValid()
    {
        return $this->IsCreditCardValid;
    }

    /**
     * @param bool $IsCreditCardValid
     *
     * @return Client
     */
    public function setIsCreditCardValid($IsCreditCardValid)
    {
        $this->IsCreditCardValid = $IsCreditCardValid;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsInactive()
    {
        return $this->IsInactive;
    }

    /**
     * @param bool $IsInactive
     *
     * @return Client
     */
    public function setIsInactive($IsInactive)
    {
        $this->IsInactive = $IsInactive;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsMarried()
    {
        return $this->IsMarried;
    }

    /**
     * @param bool $IsMarried
     *
     * @return Client
     */
    public function setIsMarried($IsMarried)
    {
        $this->IsMarried = $IsMarried;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsNonDeliverableAddress()
    {
        return $this->IsNonDeliverableAddress;
    }

    /**
     * @param bool $IsNonDeliverableAddress
     *
     * @return Client
     */
    public function setIsNonDeliverableAddress($IsNonDeliverableAddress)
    {
        $this->IsNonDeliverableAddress = $IsNonDeliverableAddress;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsPrimaryResidence()
    {
        return $this->IsPrimaryResidence;
    }

    /**
     * @param bool $IsPrimaryResidence
     *
     * @return Client
     */
    public function setIsPrimaryResidence($IsPrimaryResidence)
    {
        $this->IsPrimaryResidence = $IsPrimaryResidence;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastChangedDateTime()
    {
        if ($this->LastChangedDateTime == null) {
            return;
        } else {
            try {
                return new \DateTime($this->LastChangedDateTime);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $LastChangedDateTime
     *
     * @return Client
     */
    public function setLastChangedDateTime(\DateTime $LastChangedDateTime = null)
    {
        if ($LastChangedDateTime == null) {
            $this->LastChangedDateTime = null;
        } else {
            $this->LastChangedDateTime = $LastChangedDateTime->format(\DateTime::ATOM);
        }

        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->LastName;
    }

    /**
     * @param string $LastName
     *
     * @return Client
     */
    public function setLastName($LastName)
    {
        $this->LastName = $LastName;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastVisitDate()
    {
        if ($this->LastVisitDate == null) {
            return;
        } else {
            try {
                return new \DateTime($this->LastVisitDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $LastVisitDate
     *
     * @return Client
     */
    public function setLastVisitDate(\DateTime $LastVisitDate = null)
    {
        if ($LastVisitDate == null) {
            $this->LastVisitDate = null;
        } else {
            $this->LastVisitDate = $LastVisitDate->format(\DateTime::ATOM);
        }

        return $this;
    }

    /**
     * @return string
     */
    public function getLicenseNumber()
    {
        return $this->LicenseNumber;
    }

    /**
     * @param string $LicenseNumber
     *
     * @return Client
     */
    public function setLicenseNumber($LicenseNumber)
    {
        $this->LicenseNumber = $LicenseNumber;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getMemberExpirationDate()
    {
        if ($this->MemberExpirationDate == null) {
            return;
        } else {
            try {
                return new \DateTime($this->MemberExpirationDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $MemberExpirationDate
     *
     * @return Client
     */
    public function setMemberExpirationDate(\DateTime $MemberExpirationDate = null)
    {
        if ($MemberExpirationDate == null) {
            $this->MemberExpirationDate = null;
        } else {
            $this->MemberExpirationDate = $MemberExpirationDate->format(\DateTime::ATOM);
        }

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getMemberSince()
    {
        if ($this->MemberSince == null) {
            return;
        } else {
            try {
                return new \DateTime($this->MemberSince);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $MemberSince
     *
     * @return Client
     */
    public function setMemberSince(\DateTime $MemberSince = null)
    {
        if ($MemberSince == null) {
            $this->MemberSince = null;
        } else {
            $this->MemberSince = $MemberSince->format(\DateTime::ATOM);
        }

        return $this;
    }

    /**
     * @return MemberStatus
     */
    public function getMemberStatus()
    {
        return $this->MemberStatus;
    }

    /**
     * @param MemberStatus $MemberStatus
     *
     * @return Client
     */
    public function setMemberStatus($MemberStatus)
    {
        $this->MemberStatus = $MemberStatus;

        return $this;
    }

    /**
     * @return MembershipSale
     */
    public function getMembership()
    {
        return $this->Membership;
    }

    /**
     * @param MembershipSale $Membership
     *
     * @return Client
     */
    public function setMembership($Membership)
    {
        $this->Membership = $Membership;

        return $this;
    }

    /**
     * @return MembershipBilling
     */
    public function getMembershipBillingType()
    {
        return $this->MembershipBillingType;
    }

    /**
     * @param MembershipBilling $MembershipBillingType
     *
     * @return Client
     */
    public function setMembershipBillingType($MembershipBillingType)
    {
        $this->MembershipBillingType = $MembershipBillingType;

        return $this;
    }

    /**
     * @return int
     */
    public function getMembershipId()
    {
        return $this->MembershipId;
    }

    /**
     * @param int $MembershipId
     *
     * @return Client
     */
    public function setMembershipId($MembershipId)
    {
        $this->MembershipId = $MembershipId;

        return $this;
    }

    /**
     * @return string
     */
    public function getMembershipName()
    {
        return $this->MembershipName;
    }

    /**
     * @param string $MembershipName
     *
     * @return Client
     */
    public function setMembershipName($MembershipName)
    {
        $this->MembershipName = $MembershipName;

        return $this;
    }

    /**
     * @return float
     */
    public function getNextPaymentAmount()
    {
        return $this->NextPaymentAmount;
    }

    /**
     * @param float $NextPaymentAmount
     *
     * @return Client
     */
    public function setNextPaymentAmount($NextPaymentAmount)
    {
        $this->NextPaymentAmount = $NextPaymentAmount;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getNextPaymentDate()
    {
        if ($this->NextPaymentDate == null) {
            return;
        } else {
            try {
                return new \DateTime($this->NextPaymentDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $NextPaymentDate
     *
     * @return Client
     */
    public function setNextPaymentDate(\DateTime $NextPaymentDate = null)
    {
        if ($NextPaymentDate == null) {
            $this->NextPaymentDate = null;
        } else {
            $this->NextPaymentDate = $NextPaymentDate->format(\DateTime::ATOM);
        }

        return $this;
    }

    /**
     * @return bool
     */
    public function getNoMailingsAllowed()
    {
        return $this->NoMailingsAllowed;
    }

    /**
     * @param bool $NoMailingsAllowed
     *
     * @return Client
     */
    public function setNoMailingsAllowed($NoMailingsAllowed)
    {
        $this->NoMailingsAllowed = $NoMailingsAllowed;

        return $this;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->Notes;
    }

    /**
     * @param string $Notes
     *
     * @return Client
     */
    public function setNotes($Notes)
    {
        $this->Notes = $Notes;

        return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfVisits()
    {
        return $this->NumberOfVisits;
    }

    /**
     * @param int $NumberOfVisits
     *
     * @return Client
     */
    public function setNumberOfVisits($NumberOfVisits)
    {
        $this->NumberOfVisits = $NumberOfVisits;

        return $this;
    }

    /**
     * @return int
     */
    public function getPoints()
    {
        return $this->Points;
    }

    /**
     * @param int $Points
     *
     * @return Client
     */
    public function setPoints($Points)
    {
        $this->Points = $Points;

        return $this;
    }

    /**
     * @return string
     */
    public function getPostalSortCode()
    {
        return $this->PostalSortCode;
    }

    /**
     * @param string $PostalSortCode
     *
     * @return Client
     */
    public function setPostalSortCode($PostalSortCode)
    {
        $this->PostalSortCode = $PostalSortCode;

        return $this;
    }

    /**
     * @return int
     */
    public function getPrimaryEmployeeId()
    {
        return $this->PrimaryEmployeeId;
    }

    /**
     * @param int $PrimaryEmployeeId
     *
     * @return Client
     */
    public function setPrimaryEmployeeId($PrimaryEmployeeId)
    {
        $this->PrimaryEmployeeId = $PrimaryEmployeeId;

        return $this;
    }

    /**
     * @return int
     */
    public function getProfessionId()
    {
        return $this->ProfessionId;
    }

    /**
     * @param int $ProfessionId
     *
     * @return Client
     */
    public function setProfessionId($ProfessionId)
    {
        $this->ProfessionId = $ProfessionId;

        return $this;
    }

    /**
     * @return int
     */
    public function getReferralTypeId()
    {
        return $this->ReferralTypeId;
    }

    /**
     * @param int $ReferralTypeId
     *
     * @return Client
     */
    public function setReferralTypeId($ReferralTypeId)
    {
        $this->ReferralTypeId = $ReferralTypeId;

        return $this;
    }

    /**
     * @return int
     */
    public function getReferredByClientId()
    {
        return $this->ReferredByClientId;
    }

    /**
     * @param int $ReferredByClientId
     *
     * @return Client
     */
    public function setReferredByClientId($ReferredByClientId)
    {
        $this->ReferredByClientId = $ReferredByClientId;

        return $this;
    }

    /**
     * @return bool
     */
    public function getRestricted()
    {
        return $this->Restricted;
    }

    /**
     * @param bool $Restricted
     *
     * @return Client
     */
    public function setRestricted($Restricted)
    {
        $this->Restricted = $Restricted;

        return $this;
    }

    /**
     * @return bool
     */
    public function getSendEmails()
    {
        return $this->SendEmails;
    }

    /**
     * @param bool $SendEmails
     *
     * @return Client
     */
    public function setSendEmails($SendEmails)
    {
        $this->SendEmails = $SendEmails;

        return $this;
    }

    /**
     * @return bool
     */
    public function getSendSMS()
    {
        return $this->SendSMS;
    }

    /**
     * @param bool $SendSMS
     *
     * @return Client
     */
    public function setSendSMS($SendSMS)
    {
        $this->SendSMS = $SendSMS;

        return $this;
    }

    /**
     * @return Sex
     */
    public function getSex()
    {
        return $this->Sex;
    }

    /**
     * @param Sex $Sex
     *
     * @return Client
     */
    public function setSex($Sex)
    {
        $this->Sex = $Sex;

        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->State;
    }

    /**
     * @param string $State
     *
     * @return Client
     */
    public function setState($State)
    {
        $this->State = $State;

        return $this;
    }

    /**
     * @return int
     */
    public function getTermId()
    {
        return $this->TermId;
    }

    /**
     * @param int $TermId
     *
     * @return Client
     */
    public function setTermId($TermId)
    {
        $this->TermId = $TermId;

        return $this;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
        return $this->ZipCode;
    }

    /**
     * @param string $ZipCode
     *
     * @return Client
     */
    public function setZipCode($ZipCode)
    {
        $this->ZipCode = $ZipCode;

        return $this;
    }
}
