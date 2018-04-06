<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DiseaseDescription Entity
 *
 * @property int $id
 * @property int $disease_id
 * @property string $description
 * @property string $source
 * @property string $link
 *
 * @property \App\Model\Entity\Disease $disease
 */
class DiseaseDescription extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'disease_id' => true,
        'description' => true,
        'source' => true,
        'link' => true,
        'disease' => true
    ];
}
