<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Diseases Model
 *
 * @property \App\Model\Table\CategoriesTable|\Cake\ORM\Association\BelongsTo $Categories
 * @property \App\Model\Table\DiseaseDescriptionsTable|\Cake\ORM\Association\HasMany $DiseaseDescriptions
 * @property \App\Model\Table\DiseasesGenesTable|\Cake\ORM\Association\HasMany $DiseasesGenes
 *
 * @method \App\Model\Entity\Disease get($primaryKey, $options = [])
 * @method \App\Model\Entity\Disease newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Disease[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Disease|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Disease patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Disease[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Disease findOrCreate($search, callable $callback = null, $options = [])
 */
class DiseasesTable extends Table
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

        $this->setTable('diseases');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id'
        ]);
        $this->hasMany('DiseaseDescriptions', [
            'foreignKey' => 'disease_id'
        ]);
        $this->hasMany('DiseasesGenes', [
            'foreignKey' => 'disease_id'
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
            ->scalar('name_en')
            ->maxLength('name_en', 512)
            ->allowEmpty('name_en');

        $validator
            ->scalar('name_vi')
            ->maxLength('name_vi', 512)
            ->allowEmpty('name_vi');

        $validator
            ->scalar('description_vi')
            ->allowEmpty('description_vi');

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
        $rules->add($rules->existsIn(['category_id'], 'Categories'));

        return $rules;
    }
}
