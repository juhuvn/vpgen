<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Disease Entity
 *
 * @property int $id
 * @property string $name_en
 * @property string $name_vi
 * @property string $description_vi
 * @property int $category_id
 *
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\DiseaseDescription[] $disease_descriptions
 * @property \App\Model\Entity\DiseasesGene[] $diseases_genes
 */
class Disease extends Entity
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
        'name_en' => true,
        'name_vi' => true,
        'description_vi' => true,
        'category_id' => true,
        'category' => true,
        'disease_descriptions' => true,
        'diseases_genes' => true
    ];
}
