<?php

namespace FPlus\Millennium\Soap;

class Client extends \SoapClient
{
    /**
     * @var array The defined classes
     */
    private static $classmap = [
        'TimeZoneInfo' => 'FPlus\\Millennium\\Model\\TimeZoneInfo',
        'ArrayOfstring' => 'FPlus\\Millennium\\Model\\ArrayOfstring',
        'ArrayOfKeyValueOfdateTimeArrayOfClientHistoryabPHSVWZ' => 'FPlus\\Millennium\\Model\\ArrayOfKeyValueOfdateTimeArrayOfClientHistoryabPHSVWZ',
        'KeyValueOfdateTimeArrayOfClientHistoryabPHSVWZ' => 'FPlus\\Millennium\\Model\\KeyValueOfdateTimeArrayOfClientHistoryabPHSVWZ',
        'ArrayOfKeyValueOfDayOfWeekDailyHoursOfOperationCru9Uj6r' => 'FPlus\\Millennium\\Model\\ArrayOfKeyValueOfDayOfWeekDailyHoursOfOperationCru9Uj6r',
        'KeyValueOfDayOfWeekDailyHoursOfOperationCru9Uj6r' => 'FPlus\\Millennium\\Model\\KeyValueOfDayOfWeekDailyHoursOfOperationCru9Uj6r',
        'SessionClient' => 'FPlus\\Millennium\\Model\\SessionClient',
        'CustomException' => 'FPlus\\Millennium\\Model\\CustomException',
        'Client' => 'FPlus\\Millennium\\Model\\Client',
        'BaseDTO' => 'FPlus\\Millennium\\Model\\BaseDTO',
        'MembershipSale' => 'FPlus\\Millennium\\Model\\MembershipSale',
        'ArrayOfMembershipSaleDetail' => 'FPlus\\Millennium\\Model\\ArrayOfMembershipSaleDetail',
        'MembershipSaleDetail' => 'FPlus\\Millennium\\Model\\MembershipSaleDetail',
        'ArrayOfEftBilling' => 'FPlus\\Millennium\\Model\\ArrayOfEftBilling',
        'EftBilling' => 'FPlus\\Millennium\\Model\\EftBilling',
        'ClientCard' => 'FPlus\\Millennium\\Model\\ClientCard',
        'ArrayOfAppointment' => 'FPlus\\Millennium\\Model\\ArrayOfAppointment',
        'Appointment' => 'FPlus\\Millennium\\Model\\Appointment',
        'ArrayOfAppointmentDetail' => 'FPlus\\Millennium\\Model\\ArrayOfAppointmentDetail',
        'AppointmentDetail' => 'FPlus\\Millennium\\Model\\AppointmentDetail',
        'ArrayOfAppointmentListing' => 'FPlus\\Millennium\\Model\\ArrayOfAppointmentListing',
        'AppointmentListing' => 'FPlus\\Millennium\\Model\\AppointmentListing',
        'ArrayOfClientHistory' => 'FPlus\\Millennium\\Model\\ArrayOfClientHistory',
        'ClientHistory' => 'FPlus\\Millennium\\Model\\ClientHistory',
        'ArrayOfClientCard' => 'FPlus\\Millennium\\Model\\ArrayOfClientCard',
        'ArrayOfCreditCardType' => 'FPlus\\Millennium\\Model\\ArrayOfCreditCardType',
        'CreditCardType' => 'FPlus\\Millennium\\Model\\CreditCardType',
        'ArrayOfGCType' => 'FPlus\\Millennium\\Model\\ArrayOfGCType',
        'GCType' => 'FPlus\\Millennium\\Model\\GCType',
        'ArrayOfGC' => 'FPlus\\Millennium\\Model\\ArrayOfGC',
        'GC' => 'FPlus\\Millennium\\Model\\GC',
        'SalonInfo' => 'FPlus\\Millennium\\Model\\SalonInfo',
        'DailyHoursOfOperation' => 'FPlus\\Millennium\\Model\\DailyHoursOfOperation',
        'ArrayOfLocation' => 'FPlus\\Millennium\\Model\\ArrayOfLocation',
        'Location' => 'FPlus\\Millennium\\Model\\Location',
        'OnlineBookingConfig' => 'FPlus\\Millennium\\Model\\OnlineBookingConfig',
        'ArrayOfService' => 'FPlus\\Millennium\\Model\\ArrayOfService',
        'Service' => 'FPlus\\Millennium\\Model\\Service',
        'ArrayOfServicePackage' => 'FPlus\\Millennium\\Model\\ArrayOfServicePackage',
        'ServicePackage' => 'FPlus\\Millennium\\Model\\ServicePackage',
        'ArrayOfServiceClass' => 'FPlus\\Millennium\\Model\\ArrayOfServiceClass',
        'ServiceClass' => 'FPlus\\Millennium\\Model\\ServiceClass',
        'ArrayOfServiceSubClass' => 'FPlus\\Millennium\\Model\\ArrayOfServiceSubClass',
        'ServiceSubClass' => 'FPlus\\Millennium\\Model\\ServiceSubClass',
        'ArrayOfEmployee' => 'FPlus\\Millennium\\Model\\ArrayOfEmployee',
        'Employee' => 'FPlus\\Millennium\\Model\\Employee',
        'ScanHeader' => 'FPlus\\Millennium\\Model\\ScanHeader',
        'ArrayOfScanDetail' => 'FPlus\\Millennium\\Model\\ArrayOfScanDetail',
        'ScanDetail' => 'FPlus\\Millennium\\Model\\ScanDetail',
        'ArrayOfOpening' => 'FPlus\\Millennium\\Model\\ArrayOfOpening',
        'Opening' => 'FPlus\\Millennium\\Model\\Opening',
        'ArrayOfOpeningDetail' => 'FPlus\\Millennium\\Model\\ArrayOfOpeningDetail',
        'OpeningDetail' => 'FPlus\\Millennium\\Model\\OpeningDetail',
        'ArrayOfOpeningClass' => 'FPlus\\Millennium\\Model\\ArrayOfOpeningClass',
        'OpeningClass' => 'FPlus\\Millennium\\Model\\OpeningClass',
        'ArrayOfGCClient' => 'FPlus\\Millennium\\Model\\ArrayOfGCClient',
        'GCClient' => 'FPlus\\Millennium\\Model\\GCClient',
        'LogEntry' => 'FPlus\\Millennium\\Soap\\Message\\LogEntry',
        'LogEntryResponse' => 'FPlus\\Millennium\\Soap\\Message\\LogEntryResponse',
        'LogOn' => 'FPlus\\Millennium\\Soap\\Message\\LogOn',
        'LogOnResponse' => 'FPlus\\Millennium\\Soap\\Message\\LogOnResponse',
        'LogOff' => 'FPlus\\Millennium\\Soap\\Message\\LogOff',
        'LogOffResponse' => 'FPlus\\Millennium\\Soap\\Message\\LogOffResponse',
        'RetrivePassword' => 'FPlus\\Millennium\\Soap\\Message\\RetrivePassword',
        'RetrivePasswordResponse' => 'FPlus\\Millennium\\Soap\\Message\\RetrivePasswordResponse',
        'ValidateSession' => 'FPlus\\Millennium\\Soap\\Message\\ValidateSession',
        'ValidateSessionResponse' => 'FPlus\\Millennium\\Soap\\Message\\ValidateSessionResponse',
        'SaveClient' => 'FPlus\\Millennium\\Soap\\Message\\SaveClient',
        'SaveClientResponse' => 'FPlus\\Millennium\\Soap\\Message\\SaveClientResponse',
        'GetClient' => 'FPlus\\Millennium\\Soap\\Message\\GetClient',
        'GetClientResponse' => 'FPlus\\Millennium\\Soap\\Message\\GetClientResponse',
        'GetClientAppointments' => 'FPlus\\Millennium\\Soap\\Message\\GetClientAppointments',
        'GetClientAppointmentsResponse' => 'FPlus\\Millennium\\Soap\\Message\\GetClientAppointmentsResponse',
        'GetAppointmentListing' => 'FPlus\\Millennium\\Soap\\Message\\GetAppointmentListing',
        'GetAppointmentListingResponse' => 'FPlus\\Millennium\\Soap\\Message\\GetAppointmentListingResponse',
        'GetClientHistory' => 'FPlus\\Millennium\\Soap\\Message\\GetClientHistory',
        'GetClientHistoryResponse' => 'FPlus\\Millennium\\Soap\\Message\\GetClientHistoryResponse',
        'GetHistory' => 'FPlus\\Millennium\\Soap\\Message\\GetHistory',
        'GetHistoryResponse' => 'FPlus\\Millennium\\Soap\\Message\\GetHistoryResponse',
        'GetClientCards' => 'FPlus\\Millennium\\Soap\\Message\\GetClientCards',
        'GetClientCardsResponse' => 'FPlus\\Millennium\\Soap\\Message\\GetClientCardsResponse',
        'GetCrediCardTypes' => 'FPlus\\Millennium\\Soap\\Message\\GetCrediCardTypes',
        'GetCrediCardTypesResponse' => 'FPlus\\Millennium\\Soap\\Message\\GetCrediCardTypesResponse',
        'GetGCTypes' => 'FPlus\\Millennium\\Soap\\Message\\GetGCTypes',
        'GetGCTypesResponse' => 'FPlus\\Millennium\\Soap\\Message\\GetGCTypesResponse',
        'GetGiftCertificates' => 'FPlus\\Millennium\\Soap\\Message\\GetGiftCertificates',
        'GetGiftCertificatesResponse' => 'FPlus\\Millennium\\Soap\\Message\\GetGiftCertificatesResponse',
        'GetSalonInfo' => 'FPlus\\Millennium\\Soap\\Message\\GetSalonInfo',
        'GetSalonInfoResponse' => 'FPlus\\Millennium\\Soap\\Message\\GetSalonInfoResponse',
        'GetServices' => 'FPlus\\Millennium\\Soap\\Message\\GetServices',
        'GetServicesResponse' => 'FPlus\\Millennium\\Soap\\Message\\GetServicesResponse',
        'GetServicePackages' => 'FPlus\\Millennium\\Soap\\Message\\GetServicePackages',
        'GetServicePackagesResponse' => 'FPlus\\Millennium\\Soap\\Message\\GetServicePackagesResponse',
        'GetClasses' => 'FPlus\\Millennium\\Soap\\Message\\GetClasses',
        'GetClassesResponse' => 'FPlus\\Millennium\\Soap\\Message\\GetClassesResponse',
        'GetServiceClasses' => 'FPlus\\Millennium\\Soap\\Message\\GetServiceClasses',
        'GetServiceClassesResponse' => 'FPlus\\Millennium\\Soap\\Message\\GetServiceClassesResponse',
        'GetServiceSubClasses' => 'FPlus\\Millennium\\Soap\\Message\\GetServiceSubClasses',
        'GetServiceSubClassesResponse' => 'FPlus\\Millennium\\Soap\\Message\\GetServiceSubClassesResponse',
        'GetEmployees' => 'FPlus\\Millennium\\Soap\\Message\\GetEmployees',
        'GetEmployeesResponse' => 'FPlus\\Millennium\\Soap\\Message\\GetEmployeesResponse',
        'GetEmployeesForClasses' => 'FPlus\\Millennium\\Soap\\Message\\GetEmployeesForClasses',
        'GetEmployeesForClassesResponse' => 'FPlus\\Millennium\\Soap\\Message\\GetEmployeesForClassesResponse',
        'GetOpenings' => 'FPlus\\Millennium\\Soap\\Message\\GetOpenings',
        'GetOpeningsResponse' => 'FPlus\\Millennium\\Soap\\Message\\GetOpeningsResponse',
        'GetClassOpenings' => 'FPlus\\Millennium\\Soap\\Message\\GetClassOpenings',
        'GetClassOpeningsResponse' => 'FPlus\\Millennium\\Soap\\Message\\GetClassOpeningsResponse',
        'BookAppointment' => 'FPlus\\Millennium\\Soap\\Message\\BookAppointment',
        'BookAppointmentResponse' => 'FPlus\\Millennium\\Soap\\Message\\BookAppointmentResponse',
        'BookAppointmentClass' => 'FPlus\\Millennium\\Soap\\Message\\BookAppointmentClass',
        'BookAppointmentClassResponse' => 'FPlus\\Millennium\\Soap\\Message\\BookAppointmentClassResponse',
        'SaveGC' => 'FPlus\\Millennium\\Soap\\Message\\SaveGC',
        'SaveGCResponse' => 'FPlus\\Millennium\\Soap\\Message\\SaveGCResponse',
        'GetServerTimeZone' => 'FPlus\\Millennium\\Soap\\Message\\GetServerTimeZone',
        'GetServerTimeZoneResponse' => 'FPlus\\Millennium\\Soap\\Message\\GetServerTimeZoneResponse',
    ];

    /**
     * @param string $wsdl    The wsdl file to use
     * @param array  $options A array of config values
     */
    public function __construct($wsdl, array $options = [])
    {
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }
        $options = array_merge([
            'features' => 1,
        ], $options);

        parent::__construct($wsdl, $options);
    }

    /**
     * @param LogEntry $parameters
     *
     * @return LogEntryResponse
     */
    public function LogEntry(LogEntry $parameters)
    {
        return $this->__soapCall('LogEntry', [$parameters]);
    }

    /**
     * @param LogOn $parameters
     *
     * @return LogOnResponse
     */
    public function LogOn(LogOn $parameters)
    {
        return $this->__soapCall('LogOn', [$parameters]);
    }

    /**
     * @param LogOff $parameters
     *
     * @return LogOffResponse
     */
    public function LogOff(LogOff $parameters)
    {
        return $this->__soapCall('LogOff', [$parameters]);
    }

    /**
     * @param RetrivePassword $parameters
     *
     * @return RetrivePasswordResponse
     */
    public function RetrivePassword(RetrivePassword $parameters)
    {
        return $this->__soapCall('RetrivePassword', [$parameters]);
    }

    /**
     * @param ValidateSession $parameters
     *
     * @return ValidateSessionResponse
     */
    public function ValidateSession(ValidateSession $parameters)
    {
        return $this->__soapCall('ValidateSession', [$parameters]);
    }

    /**
     * @param SaveClient $parameters
     *
     * @return SaveClientResponse
     */
    public function SaveClient(SaveClient $parameters)
    {
        return $this->__soapCall('SaveClient', [$parameters]);
    }

    /**
     * @param GetClient $parameters
     *
     * @return GetClientResponse
     */
    public function GetClient(GetClient $parameters)
    {
        return $this->__soapCall('GetClient', [$parameters]);
    }

    /**
     * @param GetClientAppointments $parameters
     *
     * @return GetClientAppointmentsResponse
     */
    public function GetClientAppointments(GetClientAppointments $parameters)
    {
        return $this->__soapCall('GetClientAppointments', [$parameters]);
    }

    /**
     * @param GetAppointmentListing $parameters
     *
     * @return GetAppointmentListingResponse
     */
    public function GetAppointmentListing(GetAppointmentListing $parameters)
    {
        return $this->__soapCall('GetAppointmentListing', [$parameters]);
    }

    /**
     * @param GetClientHistory $parameters
     *
     * @return GetClientHistoryResponse
     */
    public function GetClientHistory(GetClientHistory $parameters)
    {
        return $this->__soapCall('GetClientHistory', [$parameters]);
    }

    /**
     * @param GetHistory $parameters
     *
     * @return GetHistoryResponse
     */
    public function GetHistory(GetHistory $parameters)
    {
        return $this->__soapCall('GetHistory', [$parameters]);
    }

    /**
     * @param GetClientCards $parameters
     *
     * @return GetClientCardsResponse
     */
    public function GetClientCards(GetClientCards $parameters)
    {
        return $this->__soapCall('GetClientCards', [$parameters]);
    }

    /**
     * @param GetCrediCardTypes $parameters
     *
     * @return GetCrediCardTypesResponse
     */
    public function GetCrediCardTypes(GetCrediCardTypes $parameters)
    {
        return $this->__soapCall('GetCrediCardTypes', [$parameters]);
    }

    /**
     * @param GetGCTypes $parameters
     *
     * @return GetGCTypesResponse
     */
    public function GetGCTypes(GetGCTypes $parameters)
    {
        return $this->__soapCall('GetGCTypes', [$parameters]);
    }

    /**
     * @param GetGiftCertificates $parameters
     *
     * @return GetGiftCertificatesResponse
     */
    public function GetGiftCertificates(GetGiftCertificates $parameters)
    {
        return $this->__soapCall('GetGiftCertificates', [$parameters]);
    }

    /**
     * @param GetSalonInfo $parameters
     *
     * @return GetSalonInfoResponse
     */
    public function GetSalonInfo(GetSalonInfo $parameters)
    {
        return $this->__soapCall('GetSalonInfo', [$parameters]);
    }

    /**
     * @param GetServices $parameters
     *
     * @return GetServicesResponse
     */
    public function GetServices(GetServices $parameters)
    {
        return $this->__soapCall('GetServices', [$parameters]);
    }

    /**
     * @param GetServicePackages $parameters
     *
     * @return GetServicePackagesResponse
     */
    public function GetServicePackages(GetServicePackages $parameters)
    {
        return $this->__soapCall('GetServicePackages', [$parameters]);
    }

    /**
     * @param GetClasses $parameters
     *
     * @return GetClassesResponse
     */
    public function GetClasses(GetClasses $parameters)
    {
        return $this->__soapCall('GetClasses', [$parameters]);
    }

    /**
     * @param GetServiceClasses $parameters
     *
     * @return GetServiceClassesResponse
     */
    public function GetServiceClasses(GetServiceClasses $parameters)
    {
        return $this->__soapCall('GetServiceClasses', [$parameters]);
    }

    /**
     * @param GetServiceSubClasses $parameters
     *
     * @return GetServiceSubClassesResponse
     */
    public function GetServiceSubClasses(GetServiceSubClasses $parameters)
    {
        return $this->__soapCall('GetServiceSubClasses', [$parameters]);
    }

    /**
     * @param GetEmployees $parameters
     *
     * @return GetEmployeesResponse
     */
    public function GetEmployees(GetEmployees $parameters)
    {
        return $this->__soapCall('GetEmployees', [$parameters]);
    }

    /**
     * @param GetEmployeesForClasses $parameters
     *
     * @return GetEmployeesForClassesResponse
     */
    public function GetEmployeesForClasses(GetEmployeesForClasses $parameters)
    {
        return $this->__soapCall('GetEmployeesForClasses', [$parameters]);
    }

    /**
     * @param GetOpenings $parameters
     *
     * @return GetOpeningsResponse
     */
    public function GetOpenings(GetOpenings $parameters)
    {
        return $this->__soapCall('GetOpenings', [$parameters]);
    }

    /**
     * @param GetClassOpenings $parameters
     *
     * @return GetClassOpeningsResponse
     */
    public function GetClassOpenings(GetClassOpenings $parameters)
    {
        return $this->__soapCall('GetClassOpenings', [$parameters]);
    }

    /**
     * @param BookAppointment $parameters
     *
     * @return BookAppointmentResponse
     */
    public function BookAppointment(BookAppointment $parameters)
    {
        return $this->__soapCall('BookAppointment', [$parameters]);
    }

    /**
     * @param BookAppointmentClass $parameters
     *
     * @return BookAppointmentClassResponse
     */
    public function BookAppointmentClass(BookAppointmentClass $parameters)
    {
        return $this->__soapCall('BookAppointmentClass', [$parameters]);
    }

    /**
     * @param SaveGC $parameters
     *
     * @return SaveGCResponse
     */
    public function SaveGC(SaveGC $parameters)
    {
        return $this->__soapCall('SaveGC', [$parameters]);
    }

    /**
     * @param GetServerTimeZone $parameters
     *
     * @return GetServerTimeZoneResponse
     */
    public function GetServerTimeZone(GetServerTimeZone $parameters)
    {
        return $this->__soapCall('GetServerTimeZone', [$parameters]);
    }
}
