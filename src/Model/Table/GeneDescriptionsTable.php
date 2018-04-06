<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GeneDescriptions Model
 *
 * @property \App\Model\Table\GenesTable|\Cake\ORM\Association\BelongsTo $Genes
 *
 * @method \App\Model\Entity\GeneDescription get($primaryKey, $options = [])
 * @method \App\Model\Entity\GeneDescription newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GeneDescription[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GeneDescription|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GeneDescription patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GeneDescription[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GeneDescription findOrCreate($search, callable $callback = null, $options = [])
 */
class GeneDescriptionsTable extends Table
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

        $this->setTable('gene_descriptions');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

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

        $validator
            ->scalar('description')
            ->allowEmpty('description');

        $validator
            ->scalar('source')
            ->maxLength('source', 256)
            ->allowEmpty('source');

        $validator
            ->scalar('link')
            ->maxLength('link', 512)
            ->allowEmpty('link');

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
        $rules->add($rules->existsIn(['gene_id'], 'Genes'));

        return $rules;
    }
}
