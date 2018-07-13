<?php
namespace Wienkit\BolPlazaClient\Entities;

/**
 * Class BolPlazaInbound
 * @package Wienkit\BolPlazaClient\Entities
 *
 * @property int $Id
 * @property string $Reference
 * @property string $CreationDate
 * @property string $State
 * @property boolean $LabellingService
 * @property int $AnnouncedBSKUs
 * @property int $AnnouncedQuantity
 * @property int $ReceivedBSKUs
 * @property int $ReceivedQuantity
 * @property BolPlazaInboundProduct[] $Products
 * @property BolPlazaInboundState $StateTransitions
 * @property BolPlazaDeliveryWindowTimeSlot $TimeSlot
 * @property BolPlazaInboundFbbTransporter $FbbTransporter
 */
class BolPlazaInbound extends BaseModel {

    protected $xmlEntityName = 'Inbound';

    protected $attributes = [
        'Id',
        'Reference',
        'CreationDate',
        'State',
        'LabellingService',
        'AnnouncedBSKUs',
        'AnnouncedQuantity',
        'ReceivedBSKUs',
        'ReceivedQuantity'
    ];

    protected $nestedEntities = [
        'TimeSlot' => 'BolPlazaDeliveryWindowTimeSlot',
        'FbbTransporter' => 'BolPlazaInboundFbbTransporter'
    ];

    protected $childEntities = [
        'Products' => [
            'childName' => 'Product',
            'entityClass' => 'BolPlazaInboundProduct'
        ],
        'StateTransitions' => [
            'childName' => 'InboundState',
            'entityClass' => 'BolPlazaInboundState'
        ]
    ];
}
