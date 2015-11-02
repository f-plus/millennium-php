<?php

namespace FPlus\Millennium\Soap;

use BeSimple\SoapClient\SoapClientBuilder as BaseSoapClientBuilder;
use BeSimple\SoapCommon\Classmap;

class SoapClientBuilder extends BaseSoapClientBuilder
{
    public static function createWithDefaults()
    {
        return parent::createWithDefaults()
            ->withUserAgent('millennium-php')
            ->withDefaultClassmap()
            ->withSoapVersion12();
    }

    public function withDefaultClassmap()
    {
        $map = new Classmap();
        $map->set([
            'TimeZoneInfo' => 'FPlus\\Millennium\\Model\\TimeZoneInfo',
            'ArrayOfstring' => 'FPlus\\Millennium\\Model\\ArrayOfstring',
            'ArrayOfKeyValueOfdateTimeArrayOfClientHistoryabPHSVWZ' => 'FPlus\\Millennium\\Model\\ClientHistoryMap',
            'KeyValueOfdateTimeArrayOfClientHistoryabPHSVWZ' => 'FPlus\\Millennium\\Model\\DateKeyValuePair',
            'ArrayOfKeyValueOfDayOfWeekDailyHoursOfOperationCru9Uj6r' => 'FPlus\\Millennium\\Model\\HoursOfOperationMap',
            'KeyValueOfDayOfWeekDailyHoursOfOperationCru9Uj6r' => 'FPlus\\Millennium\\Model\\KeyValuePair',
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
            'RetrivePassword' => 'FPlus\\Millennium\\Soap\\Message\\RetrievePassword',
            'RetrivePasswordResponse' => 'FPlus\\Millennium\\Soap\\Message\\RetrievePasswordResponse',
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
            'GetCrediCardTypes' => 'FPlus\\Millennium\\Soap\\Message\\GetCreditCardTypes',
            'GetCrediCardTypesResponse' => 'FPlus\\Millennium\\Soap\\Message\\GetCreditCardTypesResponse',
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
        ]);

        return $this->withClassmap($map);
    }
}
