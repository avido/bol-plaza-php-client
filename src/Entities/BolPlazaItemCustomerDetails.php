<?php

namespace Wienkit\BolPlazaClient\Entities;

/**
 * Class BolPlazaShipmentDetails
 * @package Wienkit\BolPlazaClient\Entities
 *
 * @param string $SalutationCode
 * @param string $Firstname
 * @param string $Surname
 * @param string $Streetname
 * @param string $Housenumber
 * @param string $HousenumberExtended
 * @param string $AddressSupplement
 * @param string $ExtraAddressInformation
 * @param string $ZipCode
 * @param string $City
 * @param string $CountryCode
 * @param string $Email
 * @param string $DeliveryPhoneNumber
 * @param string $Company
 * @param string $VatNumber
 */
class BolPlazaItemCustomerDetails extends BaseModel {

    protected $xmlEntityName = 'CustomerDetails';

    protected $attributes = [
        'SalutationCode',
        'FirstName',
        'Surname',
        'Streetname',
        'Housenumber',
        'HousenumberExtended',
        'ZipCode',
        'City',
        'CountryCode',
        'Email',
        'DeliveryPhoneNumber',
        'Company',
    ];

}
