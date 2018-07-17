<?php
namespace Wienkit\BolPlazaClient\Entities;

/**
 * Class BolPlazaInboundProduct
 * @package Wienkit\BolPlazaClient\Entities
 *
 * @param string $ean
 * @param int $announcedQuantity
 */
class BolPlazaInboundProduct extends BaseModel 
{

    protected $xmlEntityName = 'Product';

    protected $attributes = [
        'EAN',
        'BSKU',
        'AnnouncedQuantity',
        'ReceivedQuantity',
        'State'
    ];

}
