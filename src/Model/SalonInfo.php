<?php

namespace FPlus\Millennium\Model;

class SalonInfo extends BaseDTO
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
     * @var string
     */
    protected $AppointmentCaption = null;

    /**
     * @var string
     */
    protected $AppointmentCaptionMain = null;

    /**
     * @var int
     */
    protected $AppointmentIncrement = null;

    /**
     * @var string
     */
    protected $AreaCode = null;

    /**
     * @var string
     */
    protected $AreaCodeFormat = null;

    /**
     * @var bool
     */
    protected $BookClassesOnly = null;

    /**
     * @var bool
     */
    protected $BookPackagesOnly = null;

    /**
     * @var string
     */
    protected $City = null;

    /**
     * @var string
     */
    protected $ClientCaption = null;

    /**
     * @var int
     */
    protected $ClientIdentifier = null;

    /**
     * @var string
     */
    protected $CompanyEmail = null;

    /**
     * @var string
     */
    protected $CompanyName = null;

    /**
     * @var string
     */
    protected $EmployeeCaption = null;

    /**
     * @var string
     */
    protected $FaxArea = null;

    /**
     * @var string
     */
    protected $FaxPhone = null;

    /**
     * @var DayOfWeek
     */
    protected $FirstDayOfWeek = null;

    /**
     * @var string
     */
    protected $GCCaption = null;

    /**
     * @var bool
     */
    protected $HasClassBooking = null;

    /**
     * @var ArrayOfKeyValueOfDayOfWeekDailyHoursOfOperationCru9Uj6r
     */
    protected $HoursOfOperation = null;

    /**
     * @var string
     */
    protected $ImagePath = null;

    /**
     * @var ArrayOfLocation
     */
    protected $Locations = null;

    /**
     * @var OnlineBookingConfig
     */
    protected $OnlineBookingConfig = null;

    /**
     * @var string
     */
    protected $PackageSeriesCaption = null;

    /**
     * @var string
     */
    protected $PhoneFormat = null;

    /**
     * @var string
     */
    protected $PhoneNumber = null;

    /**
     * @var string
     */
    protected $ServiceCaption = null;

    /**
     * @var bool
     */
    protected $ShowPricesWithTax = null;

    /**
     * @var string
     */
    protected $State = null;

    /**
     * @var int
     */
    protected $TaxType = null;

    /**
     * @var string
     */
    protected $WebSite = null;

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
     * @return \Millennium\Soap\SalonInfo
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
     * @return \Millennium\Soap\SalonInfo
     */
    public function setAddress2($Address2)
    {
        $this->Address2 = $Address2;

        return $this;
    }

    /**
     * @return string
     */
    public function getAppointmentCaption()
    {
        return $this->AppointmentCaption;
    }

    /**
     * @param string $AppointmentCaption
     *
     * @return \Millennium\Soap\SalonInfo
     */
    public function setAppointmentCaption($AppointmentCaption)
    {
        $this->AppointmentCaption = $AppointmentCaption;

        return $this;
    }

    /**
     * @return string
     */
    public function getAppointmentCaptionMain()
    {
        return $this->AppointmentCaptionMain;
    }

    /**
     * @param string $AppointmentCaptionMain
     *
     * @return \Millennium\Soap\SalonInfo
     */
    public function setAppointmentCaptionMain($AppointmentCaptionMain)
    {
        $this->AppointmentCaptionMain = $AppointmentCaptionMain;

        return $this;
    }

    /**
     * @return int
     */
    public function getAppointmentIncrement()
    {
        return $this->AppointmentIncrement;
    }

    /**
     * @param int $AppointmentIncrement
     *
     * @return \Millennium\Soap\SalonInfo
     */
    public function setAppointmentIncrement($AppointmentIncrement)
    {
        $this->AppointmentIncrement = $AppointmentIncrement;

        return $this;
    }

    /**
     * @return string
     */
    public function getAreaCode()
    {
        return $this->AreaCode;
    }

    /**
     * @param string $AreaCode
     *
     * @return \Millennium\Soap\SalonInfo
     */
    public function setAreaCode($AreaCode)
    {
        $this->AreaCode = $AreaCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getAreaCodeFormat()
    {
        return $this->AreaCodeFormat;
    }

    /**
     * @param string $AreaCodeFormat
     *
     * @return \Millennium\Soap\SalonInfo
     */
    public function setAreaCodeFormat($AreaCodeFormat)
    {
        $this->AreaCodeFormat = $AreaCodeFormat;

        return $this;
    }

    /**
     * @return bool
     */
    public function getBookClassesOnly()
    {
        return $this->BookClassesOnly;
    }

    /**
     * @param bool $BookClassesOnly
     *
     * @return \Millennium\Soap\SalonInfo
     */
    public function setBookClassesOnly($BookClassesOnly)
    {
        $this->BookClassesOnly = $BookClassesOnly;

        return $this;
    }

    /**
     * @return bool
     */
    public function getBookPackagesOnly()
    {
        return $this->BookPackagesOnly;
    }

    /**
     * @param bool $BookPackagesOnly
     *
     * @return \Millennium\Soap\SalonInfo
     */
    public function setBookPackagesOnly($BookPackagesOnly)
    {
        $this->BookPackagesOnly = $BookPackagesOnly;

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
     * @return \Millennium\Soap\SalonInfo
     */
    public function setCity($City)
    {
        $this->City = $City;

        return $this;
    }

    /**
     * @return string
     */
    public function getClientCaption()
    {
        return $this->ClientCaption;
    }

    /**
     * @param string $ClientCaption
     *
     * @return \Millennium\Soap\SalonInfo
     */
    public function setClientCaption($ClientCaption)
    {
        $this->ClientCaption = $ClientCaption;

        return $this;
    }

    /**
     * @return int
     */
    public function getClientIdentifier()
    {
        return $this->ClientIdentifier;
    }

    /**
     * @param int $ClientIdentifier
     *
     * @return \Millennium\Soap\SalonInfo
     */
    public function setClientIdentifier($ClientIdentifier)
    {
        $this->ClientIdentifier = $ClientIdentifier;

        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyEmail()
    {
        return $this->CompanyEmail;
    }

    /**
     * @param string $CompanyEmail
     *
     * @return \Millennium\Soap\SalonInfo
     */
    public function setCompanyEmail($CompanyEmail)
    {
        $this->CompanyEmail = $CompanyEmail;

        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }

    /**
     * @param string $CompanyName
     *
     * @return \Millennium\Soap\SalonInfo
     */
    public function setCompanyName($CompanyName)
    {
        $this->CompanyName = $CompanyName;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmployeeCaption()
    {
        return $this->EmployeeCaption;
    }

    /**
     * @param string $EmployeeCaption
     *
     * @return \Millennium\Soap\SalonInfo
     */
    public function setEmployeeCaption($EmployeeCaption)
    {
        $this->EmployeeCaption = $EmployeeCaption;

        return $this;
    }

    /**
     * @return string
     */
    public function getFaxArea()
    {
        return $this->FaxArea;
    }

    /**
     * @param string $FaxArea
     *
     * @return \Millennium\Soap\SalonInfo
     */
    public function setFaxArea($FaxArea)
    {
        $this->FaxArea = $FaxArea;

        return $this;
    }

    /**
     * @return string
     */
    public function getFaxPhone()
    {
        return $this->FaxPhone;
    }

    /**
     * @param string $FaxPhone
     *
     * @return \Millennium\Soap\SalonInfo
     */
    public function setFaxPhone($FaxPhone)
    {
        $this->FaxPhone = $FaxPhone;

        return $this;
    }

    /**
     * @return DayOfWeek
     */
    public function getFirstDayOfWeek()
    {
        return $this->FirstDayOfWeek;
    }

    /**
     * @param DayOfWeek $FirstDayOfWeek
     *
     * @return \Millennium\Soap\SalonInfo
     */
    public function setFirstDayOfWeek($FirstDayOfWeek)
    {
        $this->FirstDayOfWeek = $FirstDayOfWeek;

        return $this;
    }

    /**
     * @return string
     */
    public function getGCCaption()
    {
        return $this->GCCaption;
    }

    /**
     * @param string $GCCaption
     *
     * @return \Millennium\Soap\SalonInfo
     */
    public function setGCCaption($GCCaption)
    {
        $this->GCCaption = $GCCaption;

        return $this;
    }

    /**
     * @return bool
     */
    public function getHasClassBooking()
    {
        return $this->HasClassBooking;
    }

    /**
     * @param bool $HasClassBooking
     *
     * @return \Millennium\Soap\SalonInfo
     */
    public function setHasClassBooking($HasClassBooking)
    {
        $this->HasClassBooking = $HasClassBooking;

        return $this;
    }

    /**
     * @return ArrayOfKeyValueOfDayOfWeekDailyHoursOfOperationCru9Uj6r
     */
    public function getHoursOfOperation()
    {
        return $this->HoursOfOperation;
    }

    /**
     * @param ArrayOfKeyValueOfDayOfWeekDailyHoursOfOperationCru9Uj6r $HoursOfOperation
     *
     * @return \Millennium\Soap\SalonInfo
     */
    public function setHoursOfOperation($HoursOfOperation)
    {
        $this->HoursOfOperation = $HoursOfOperation;

        return $this;
    }

    /**
     * @return string
     */
    public function getImagePath()
    {
        return $this->ImagePath;
    }

    /**
     * @param string $ImagePath
     *
     * @return \Millennium\Soap\SalonInfo
     */
    public function setImagePath($ImagePath)
    {
        $this->ImagePath = $ImagePath;

        return $this;
    }

    /**
     * @return ArrayOfLocation
     */
    public function getLocations()
    {
        return $this->Locations;
    }

    /**
     * @param ArrayOfLocation $Locations
     *
     * @return \Millennium\Soap\SalonInfo
     */
    public function setLocations($Locations)
    {
        $this->Locations = $Locations;

        return $this;
    }

    /**
     * @return OnlineBookingConfig
     */
    public function getOnlineBookingConfig()
    {
        return $this->OnlineBookingConfig;
    }

    /**
     * @param OnlineBookingConfig $OnlineBookingConfig
     *
     * @return \Millennium\Soap\SalonInfo
     */
    public function setOnlineBookingConfig($OnlineBookingConfig)
    {
        $this->OnlineBookingConfig = $OnlineBookingConfig;

        return $this;
    }

    /**
     * @return string
     */
    public function getPackageSeriesCaption()
    {
        return $this->PackageSeriesCaption;
    }

    /**
     * @param string $PackageSeriesCaption
     *
     * @return \Millennium\Soap\SalonInfo
     */
    public function setPackageSeriesCaption($PackageSeriesCaption)
    {
        $this->PackageSeriesCaption = $PackageSeriesCaption;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneFormat()
    {
        return $this->PhoneFormat;
    }

    /**
     * @param string $PhoneFormat
     *
     * @return \Millennium\Soap\SalonInfo
     */
    public function setPhoneFormat($PhoneFormat)
    {
        $this->PhoneFormat = $PhoneFormat;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }

    /**
     * @param string $PhoneNumber
     *
     * @return \Millennium\Soap\SalonInfo
     */
    public function setPhoneNumber($PhoneNumber)
    {
        $this->PhoneNumber = $PhoneNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getServiceCaption()
    {
        return $this->ServiceCaption;
    }

    /**
     * @param string $ServiceCaption
     *
     * @return \Millennium\Soap\SalonInfo
     */
    public function setServiceCaption($ServiceCaption)
    {
        $this->ServiceCaption = $ServiceCaption;

        return $this;
    }

    /**
     * @return bool
     */
    public function getShowPricesWithTax()
    {
        return $this->ShowPricesWithTax;
    }

    /**
     * @param bool $ShowPricesWithTax
     *
     * @return \Millennium\Soap\SalonInfo
     */
    public function setShowPricesWithTax($ShowPricesWithTax)
    {
        $this->ShowPricesWithTax = $ShowPricesWithTax;

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
     * @return \Millennium\Soap\SalonInfo
     */
    public function setState($State)
    {
        $this->State = $State;

        return $this;
    }

    /**
     * @return int
     */
    public function getTaxType()
    {
        return $this->TaxType;
    }

    /**
     * @param int $TaxType
     *
     * @return \Millennium\Soap\SalonInfo
     */
    public function setTaxType($TaxType)
    {
        $this->TaxType = $TaxType;

        return $this;
    }

    /**
     * @return string
     */
    public function getWebSite()
    {
        return $this->WebSite;
    }

    /**
     * @param string $WebSite
     *
     * @return \Millennium\Soap\SalonInfo
     */
    public function setWebSite($WebSite)
    {
        $this->WebSite = $WebSite;

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
     * @return \Millennium\Soap\SalonInfo
     */
    public function setZipCode($ZipCode)
    {
        $this->ZipCode = $ZipCode;

        return $this;
    }
}
