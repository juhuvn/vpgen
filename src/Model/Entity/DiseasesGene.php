<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DiseasesGene Entity
 *
 * @property int $id
 * @property int $disease_id
 * @property int $gene_id
 *
 * @property \App\Model\Entity\Disease $disease
 * @property \App\Model\Entity\Gene $gene
 */
class DiseasesGene extends Entity
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
        'gene_id' => true,
        'disease' => true,
        'gene' => true
    ];
}
