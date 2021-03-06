<?php

namespace Wienkit\BolPlazaClient\Entities;

/**
 * Class BolPlazaPayment
 * @package Wienkit\BolPlazaClient\Entities
 *
 * @property string $CreditInvoiceNumber
 * @property string $DateTimePayment
 * @property string $PaymentAmount
 * @property string $PaymentVAT
 * @property string $ShippingLabelCosts
 * @property string $ShippingLabelVAT
 * @property BolPlazaPaymentShipment[] $PaymentShipments
 */
class BolPlazaPayment extends BaseModel {

    protected $xmlEntityName = 'Payment';

    protected $attributes = [
        'CreditInvoiceNumber',
        'DateTimePayment',
        'PaymentAmount',
        'PaymentVAT',
        'ShippingLabelCosts',
        'ShippingLabelVAT'
    ];

    protected $childEntities = [
        'PaymentShipments' => [
            'childName' => 'PaymentShipment',
            'entityClass' => 'BolPlazaPaymentShipment'
        ]
    ];
}
