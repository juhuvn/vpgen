<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * GeneDescription Entity
 *
 * @property int $id
 * @property string $description
 * @property string $source
 * @property string $link
 * @property int $gene_id
 *
 * @property \App\Model\Entity\Gene $gene
 */
class GeneDescription extends Entity
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
        'description' => true,
        'source' => true,
        'link' => true,
        'gene_id' => true,
        'gene' => true
    ];
}
