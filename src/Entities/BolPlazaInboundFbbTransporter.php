<?php
namespace Wienkit\BolPlazaClient\Entities;

/**
 * Class BolPlazaInboundFbbTransporter
 * @package Wienkit\BolPlazaClient\Entities
 *
 * @param string $Code
 * @param string $Name
 */
class BolPlazaInboundFbbTransporter extends BaseModel 
{
    protected $xmlEntityName = 'TimeSlot';

    protected $attributes = [
        'Code',
        'Name'
    ];

    protected $nestedEntities = [
    ];

}
