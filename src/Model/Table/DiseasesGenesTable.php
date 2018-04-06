<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DiseasesGenes Model
 *
 * @property \App\Model\Table\DiseasesTable|\Cake\ORM\Association\BelongsTo $Diseases
 * @property \App\Model\Table\GenesTable|\Cake\ORM\Association\BelongsTo $Genes
 *
 * @method \App\Model\Entity\DiseasesGene get($primaryKey, $options = [])
 * @method \App\Model\Entity\DiseasesGene newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DiseasesGene[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DiseasesGene|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DiseasesGene patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DiseasesGene[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DiseasesGene findOrCreate($search, callable $callback = null, $options = [])
 */
class DiseasesGenesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('diseases_genes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Diseases', [
            'foreignKey' => 'disease_id'
        ]);
        $this->belongsTo('Genes', [
            'foreignKey' => 'gene_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['disease_id'], 'Diseases'));
        $rules->add($rules->existsIn(['gene_id'], 'Genes'));

        return $rules;
    }
}
