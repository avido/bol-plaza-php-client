<?php
namespace Wienkit\BolPlazaClient\Entities;

/**
 * Class BolPlazaInboundProduct
 * @package Wienkit\BolPlazaClient\Entities
 *
 * @param string $ean
 * @param int $announcedQuantity
 */
class BolPlazaInboundProducts extends BaseModel 
{
    protected $xmlEntityName = 'Products';

    protected $childEntities = [
        'Products' => [
            'childName' => 'Products',
            'entityClass' => 'BolPlazaInboundProducts'
        ]
    ];
}
