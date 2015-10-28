<?php

namespace FPlus\Millennium\Model;

class Client extends BaseDTO
{
    /**
     * @var string
     */
    protected $Address1 = null;

    /**
     * @var string
     */
    protected $Address2 = null;

    /**
     * @var bool
     */
    protected $AllowAccountCharge = null;

    /**
     * @var bool
     */
    protected $AllowPoints = null;

    /**
     * @var \DateTime
     */
    protected $AnniversaryDate = null;

    /**
     * @var \DateTime
     */
    protected $Birthday = null;

    /**
     * @var string
     */
    protected $BusinessAreaCode = null;

    /**
     * @var string
     */
    protected $BusinessExtension = null;

    /**
     * @var string
     */
    protected $BusinessPhoneNumber = null;

    /**
     * @var bool
     */
    protected $CanBookApptsOnline = null;

    /**
     * @var bool
     */
    protected $CanViewApptsOnline = null;

    /**
     * @var string
     */
    protected $CellAreaCode = null;

    /**
     * @var string
     */
    protected $CellPhoneNumber = null;

    /**
     * @var bool
     */
    protected $ChecksAllowed = null;

    /**
     * @var string
     */
    protected $City = null;

    /**
     * @var bool
     */
    protected $ConfirmAppointments = null;

    /**
     * @var int
     */
    protected $ConfirmDaysInAdvance = null;

    /**
     * @var bool
     */
    protected $ConfirmViaAutoConfirmation = null;

    /**
     * @var bool
     */
    protected $ConfirmViaBusinessPhone = null;

    /**
     * @var bool
     */
    protected $ConfirmViaCellPhone = null;

    /**
     * @var bool
     */
    protected $ConfirmViaEmail = null;

    /**
     * @var bool
     */
    protected $ConfirmViaFax = null;

    /**
     * @var bool
     */
    protected $ConfirmViaHomePhone = null;

    /**
     * @var bool
     */
    protected $ConfirmViaSMS = null;

    /**
     * @var string
     */
    protected $ConfirmationSequence = null;

    /**
     * @var float
     */
    protected $CreditLimit = null;

    /**
     * @var \DateTime
     */
    protected $DateCreated = null;

    /**
     * @var bool
     */
    protected $DisplayNotesInAppointmentBook = null;

    /**
     * @var bool
     */
    protected $DisplayNotesInRegister = null;

    /**
     * @var bool
     */
    protected $DisplayUDFInAppointmentBook = null;

    /**
     * @var bool
     */
    protected $DisplayUDFInRegister = null;

    /**
     * @var string
     */
    protected $DotNetPassword = null;

    /**
     * @var string
     */
    protected $EmailAddress = null;

    /**
     * @var string
     */
    protected $FaxAreaCode = null;

    /**
     * @var string
     */
    protected $FaxPhoneNumber = null;

    /**
     * @var string
     */
    protected $FirstName = null;

    /**
     * @var \DateTime
     */
    protected $FirstVisitDate = null;

    /**
     * @var int
     */
    protected $GuestId = null;

    /**
     * @var bool
     */
    protected $HasChildren = null;

    /**
     * @var bool
     */
    protected $HasCreditCardOnFile = null;

    /**
     * @var bool
     */
    protected $HasMemberships = null;

    /**
     * @var string
     */
    protected $HomeAreaCode = null;

    /**
     * @var string
     */
    protected $HomePhoneNumber = null;

    /**
     * @var string
     */
    protected $HotelRoomNumber = null;

    /**
     * @var int
     */
    protected $Id = null;

    /**
     * @var bool
     */
    protected $IsCreditCardValid = null;

    /**
     * @var bool
     */
    protected $IsInactive = null;

    /**
     * @var bool
     */
    protected $IsMarried = null;

    /**
     * @var bool
     */
    protected $IsNonDeliverableAddress = null;

    /**
     * @var bool
     */
    protected $IsPrimaryResidence = null;

    /**
     * @var \DateTime
     */
    protected $LastChangedDateTime = null;

    /**
     * @var string
     */
    protected $LastName = null;

    /**
     * @var \DateTime
     */
    protected $LastVisitDate = null;

    /**
     * @var string
     */
    protected $LicenseNumber = null;

    /**
     * @var \DateTime
     */
    protected $MemberExpirationDate = null;

    /**
     * @var \DateTime
     */
    protected $MemberSince = null;

    /**
     * @var MemberStatus
     */
    protected $MemberStatus = null;

    /**
     * @var MembershipSale
     */
    protected $Membership = null;

    /**
     * @var MembershipBilling
     */
    protected $MembershipBillingType = null;

    /**
     * @var int
     */
    protected $MembershipId = null;

    /**
     * @var string
     */
    protected $MembershipName = null;

    /**
     * @var float
     */
    protected $NextPaymentAmount = null;

    /**
     * @var \DateTime
     */
    protected $NextPaymentDate = null;

    /**
     * @var bool
     */
    protected $NoMailingsAllowed = null;

    /**
     * @var string
     */
    protected $Notes = null;

    /**
     * @var int
     */
    protected $NumberOfVisits = null;

    /**
     * @var int
     */
    protected $Points = null;

    /**
     * @var string
     */
    protected $PostalSortCode = null;

    /**
     * @var int
     */
    protected $PrimaryEmployeeId = null;

    /**
     * @var int
     */
    protected $ProfessionId = null;

    /**
     * @var int
     */
    protected $ReferralTypeId = null;

    /**
     * @var int
     */
    protected $ReferredByClientId = null;

    /**
     * @var bool
     */
    protected $Restricted = null;

    /**
     * @var bool
     */
    protected $SendEmails = null;

    /**
     * @var bool
     */
    protected $SendSMS = null;

    /**
     * @var Sex
     */
    protected $Sex = null;

    /**
     * @var string
     */
    protected $State = null;

    /**
     * @var int
     */
    protected $TermId = null;

    /**
     * @var string
     */
    protected $ZipCode = null;

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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
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
     * @return \Millennium\Soap\Client
     */
    public function setZipCode($ZipCode)
    {
        $this->ZipCode = $ZipCode;

        return $this;
    }
}
