<?php
namespace Wienkit\BolPlazaClient\Entities;

/**
 * Class BolPlazaInbounds
 * @package Wienkit\BolPlazaClient\Entities
 *
 * @property string $TotalCount
 * @property string $TotalPageCount
 * @property Offers[] $Offers
 */
class BolPlazaInbounds extends BaseModel {

    protected $xmlEntityName = 'Inbounds';
    

    protected $attributes = [
        'TotalCount',
        'TotalPageCount'
    ];

    protected $nestedEntities = [
        'Inbound' => 'BolPlazaInbound'
    ];    
}