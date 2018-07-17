<?php
namespace Wienkit\BolPlazaClient\Entities;

/**
 * Class BolPlazaInboundProductlabelsRequest
 * @package Wienkit\BolPlazaClient\Entities
 *
 * @property BolPlazaProductLabel[] $Productlabels
 */
class BolPlazaInboundProductlabelsRequest extends BaseModel 
{
    protected $xmlEntityName = 'Productlabels';

    protected $attributes = [
    ];

    protected $nestedEntities = [
        'Productlabels' => 'BolPlazaInboundProductLabel'
    ];
}
