<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Gene Entity
 *
 * @property int $id
 * @property string $name
 * @property string $name_full
 * @property string $description_vi
 * @property string $synonyms
 * @property int $omim
 *
 * @property \App\Model\Entity\DiseasesGene[] $diseases_genes
 * @property \App\Model\Entity\GeneDescription[] $gene_descriptions
 */
class Gene extends Entity
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
        'name' => true,
        'name_full' => true,
        'description_vi' => true,
        'synonyms' => true,
        'omim' => true,
        'diseases_genes' => true,
        'gene_descriptions' => true
    ];
}
