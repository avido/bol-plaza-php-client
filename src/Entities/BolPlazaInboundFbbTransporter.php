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
    protected $xmlEntityName = 'FbbTransporter';

    protected $attributes = [
        'Code',
        'Name'
    ];

    protected $nestedEntities = [
    ];

}
