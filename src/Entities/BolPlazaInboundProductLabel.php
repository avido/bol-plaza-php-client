<?php
namespace Wienkit\BolPlazaClient\Entities;

/**
 * Class BolPlazaInboundProductLabel
 * @package Wienkit\BolPlazaClient\Entities
 *
 * @param string $ean
 * @param int $announcedQuantity
 */
class BolPlazaInboundProductLabel extends BaseModel 
{

    protected $xmlEntityName = 'Productlabel';

    protected $attributes = [
        'EAN',
        'Quantity'
    ];
}
