<?php

namespace FPlus\Millennium\Model;

class SalonInfo extends BaseDTO
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
     * @var string
     */
    protected $AppointmentCaption;

    /**
     * @var string
     */
    protected $AppointmentCaptionMain;

    /**
     * @var int
     */
    protected $AppointmentIncrement;

    /**
     * @var string
     */
    protected $AreaCode;

    /**
     * @var string
     */
    protected $AreaCodeFormat;

    /**
     * @var bool
     */
    protected $BookClassesOnly;

    /**
     * @var bool
     */
    protected $BookPackagesOnly;

    /**
     * @var string
     */
    protected $City;

    /**
     * @var string
     */
    protected $ClientCaption;

    /**
     * @var int
     */
    protected $ClientIdentifier;

    /**
     * @var string
     */
    protected $CompanyEmail;

    /**
     * @var string
     */
    protected $CompanyName;

    /**
     * @var string
     */
    protected $EmployeeCaption;

    /**
     * @var string
     */
    protected $FaxArea;

    /**
     * @var string
     */
    protected $FaxPhone;

    /**
     * @var DayOfWeek
     */
    protected $FirstDayOfWeek;

    /**
     * @var string
     */
    protected $GCCaption;

    /**
     * @var bool
     */
    protected $HasClassBooking;

    /**
     * @var HoursOfOperationMap
     */
    protected $HoursOfOperation;

    /**
     * @var string
     */
    protected $ImagePath;

    /**
     * @var ArrayOfLocation
     */
    protected $Locations;

    /**
     * @var OnlineBookingConfig
     */
    protected $OnlineBookingConfig;

    /**
     * @var string
     */
    protected $PackageSeriesCaption;

    /**
     * @var string
     */
    protected $PhoneFormat;

    /**
     * @var string
     */
    protected $PhoneNumber;

    /**
     * @var string
     */
    protected $ServiceCaption;

    /**
     * @var bool
     */
    protected $ShowPricesWithTax;

    /**
     * @var string
     */
    protected $State;

    /**
     * @var int
     */
    protected $TaxType;

    /**
     * @var string
     */
    protected $WebSite;

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
     * @return SalonInfo
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
     * @return SalonInfo
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
     * @return SalonInfo
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
     * @return SalonInfo
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
     * @return SalonInfo
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
     * @return SalonInfo
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
     * @return SalonInfo
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
     * @return SalonInfo
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
     * @return SalonInfo
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
     * @return SalonInfo
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
     * @return SalonInfo
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
     * @return SalonInfo
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
     * @return SalonInfo
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
     * @return SalonInfo
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
     * @return SalonInfo
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
     * @return SalonInfo
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
     * @return SalonInfo
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
     * @return SalonInfo
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
     * @return SalonInfo
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
     * @return SalonInfo
     */
    public function setHasClassBooking($HasClassBooking)
    {
        $this->HasClassBooking = $HasClassBooking;

        return $this;
    }

    /**
     * @return HoursOfOperationMap
     */
    public function getHoursOfOperation()
    {
        return $this->HoursOfOperation;
    }

    /**
     * @param HoursOfOperationMap $HoursOfOperation
     *
     * @return SalonInfo
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
     * @return SalonInfo
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
     * @return SalonInfo
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
     * @return SalonInfo
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
     * @return SalonInfo
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
     * @return SalonInfo
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
     * @return SalonInfo
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
     * @return SalonInfo
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
     * @return SalonInfo
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
     * @return SalonInfo
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
     * @return SalonInfo
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
     * @return SalonInfo
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
     * @return SalonInfo
     */
    public function setZipCode($ZipCode)
    {
        $this->ZipCode = $ZipCode;

        return $this;
    }
}
