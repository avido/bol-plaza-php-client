<?php
namespace Wienkit\BolPlazaClient\Entities;

/**
 * Class BolPlazaInboundRequest
 * @package Wienkit\BolPlazaClient\Entities
 *
 * @property int $Reference
 * @property string $TimeSlot
 * @property string $FbbTransporter
 * @property bool $LabellingService
 * @property BolPlazaProducts[] $Products
 */
class BolPlazaInboundRequest extends BaseModel {

    protected $xmlEntityName = 'InboundRequest';

    protected $attributes = [
        'Reference',
        'LabellingService',
        'Products'
    ];

    protected $nestedEntities = [
        'TimeSlot' => 'BolPlazaInboundTimeSlot',
        'FbbTransporter' => 'BolPlazaFbbTransporter',
        'Products' => 'BolPlazaInboundProducts'
    ];
}
