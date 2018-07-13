<?php
namespace Wienkit\BolPlazaClient\Entities;

/**
 * Class BolPlazaInboundTimeSlot
 * @package Wienkit\BolPlazaClient\Entities
 *
 * @param string $Start
 * @param string $End
 */
class BolPlazaInboundTimeSlot extends BaseModel 
{
    protected $xmlEntityName = 'TimeSlot';

    protected $attributes = [
        'Start',
        'End'
    ];

    protected $nestedEntities = [
    ];

}
