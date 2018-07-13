<?php
namespace Wienkit\BolPlazaClient\Entities;

/**
 * Class BolPlazaInboundState
 * @package Wienkit\BolPlazaClient\Entities
 *
 * @param string $State
 * @param string $StateDate
 */
class BolPlazaInboundState extends BaseModel 
{

    protected $xmlEntityName = 'InboundState';

    protected $attributes = [
        'State',
        'StateDate'
    ];

}
