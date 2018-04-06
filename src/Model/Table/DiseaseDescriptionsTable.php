<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DiseaseDescriptions Model
 *
 * @property \App\Model\Table\DiseasesTable|\Cake\ORM\Association\BelongsTo $Diseases
 *
 * @method \App\Model\Entity\DiseaseDescription get($primaryKey, $options = [])
 * @method \App\Model\Entity\DiseaseDescription newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DiseaseDescription[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DiseaseDescription|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DiseaseDescription patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DiseaseDescription[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DiseaseDescription findOrCreate($search, callable $callback = null, $options = [])
 */
class DiseaseDescriptionsTable extends Table
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

        $this->setTable('disease_descriptions');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Diseases', [
            'foreignKey' => 'disease_id',
            'joinType' => 'INNER'
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
        $rules->add($rules->existsIn(['disease_id'], 'Diseases'));

        return $rules;
    }
}
