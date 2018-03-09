<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LabSampleData Model
 *
 * @property \App\Model\Table\SampleRegistrationTable|\Cake\ORM\Association\BelongsTo $SampleRegistration
 * @property \App\Model\Table\LabsTable|\Cake\ORM\Association\BelongsTo $Labs
 * @property \App\Model\Table\SpeciesTable|\Cake\ORM\Association\BelongsTo $Species
 * @property \App\Model\Table\BreedsTable|\Cake\ORM\Association\BelongsTo $Breeds
 * @property \App\Model\Table\SampleListsTable|\Cake\ORM\Association\BelongsTo $SampleLists
 * @property \App\Model\Table\YearlyLabsTable|\Cake\ORM\Association\BelongsTo $YearlyLabs
 * @property \App\Model\Table\MonthlyLabsTable|\Cake\ORM\Association\BelongsTo $MonthlyLabs
 * @property \App\Model\Table\SampleApplicableTestTable|\Cake\ORM\Association\BelongsTo $SampleApplicableTest
 *
 * @method \App\Model\Entity\LabSampleData get($primaryKey, $options = [])
 * @method \App\Model\Entity\LabSampleData newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\LabSampleData[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LabSampleData|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LabSampleData patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LabSampleData[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\LabSampleData findOrCreate($search, callable $callback = null, $options = [])
 */
class LabSampleDataTable extends Table
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

        $this->setTable('lab_sample_data');
        $this->setDisplayField('sample_id');
        $this->setPrimaryKey('sample_id');

        $this->belongsTo('SampleRegistration', [
            'foreignKey' => 'sample_reg_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Labs', [
            'foreignKey' => 'lab_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Species', [
            'foreignKey' => 'species_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Breeds', [
            'foreignKey' => 'breed_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('SampleLists', [
            'foreignKey' => 'sample_list_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('YearlyLabs', [
            'foreignKey' => 'yearly_lab_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('MonthlyLabs', [
            'foreignKey' => 'monthly_lab_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('SampleApplicableTest', [
            'foreignKey' => 'test_id',
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
            ->integer('sample_id')
            ->allowEmpty('sample_id', 'create');

        $validator
            ->integer('tag_no')
            ->requirePresence('tag_no', 'create')
            ->notEmpty('tag_no');

        $validator
            ->scalar('sex')
            ->requirePresence('sex', 'create')
            ->notEmpty('sex');

        $validator
            ->integer('age')
            ->requirePresence('age', 'create')
            ->notEmpty('age');

        $validator
            ->scalar('post_mortum')
            ->requirePresence('post_mortum', 'create')
            ->notEmpty('post_mortum');

        $validator
            ->scalar('doc_name')
            ->maxLength('doc_name', 255)
            ->requirePresence('doc_name', 'create')
            ->notEmpty('doc_name');

        $validator
            ->scalar('doc_type')
            ->maxLength('doc_type', 255)
            ->requirePresence('doc_type', 'create')
            ->notEmpty('doc_type');

        $validator
            ->scalar('doc_size')
            ->maxLength('doc_size', 255)
            ->requirePresence('doc_size', 'create')
            ->notEmpty('doc_size');

        $validator
            ->scalar('instruction_by_level_1')
            ->maxLength('instruction_by_level_1', 255)
            ->requirePresence('instruction_by_level_1', 'create')
            ->notEmpty('instruction_by_level_1');

        $validator
            ->scalar('instruction_by_level_2')
            ->maxLength('instruction_by_level_2', 255)
            ->requirePresence('instruction_by_level_2', 'create')
            ->notEmpty('instruction_by_level_2');

        $validator
            ->scalar('instruction_by_level_3')
            ->maxLength('instruction_by_level_3', 255)
            ->requirePresence('instruction_by_level_3', 'create')
            ->notEmpty('instruction_by_level_3');

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
        $rules->add($rules->existsIn(['sample_reg_id'], 'SampleRegistration'));
        $rules->add($rules->existsIn(['lab_id'], 'Labs'));
        $rules->add($rules->existsIn(['species_id'], 'Species'));
        $rules->add($rules->existsIn(['breed_id'], 'Breeds'));
        $rules->add($rules->existsIn(['sample_list_id'], 'SampleLists'));
        $rules->add($rules->existsIn(['yearly_lab_id'], 'YearlyLabs'));
        $rules->add($rules->existsIn(['monthly_lab_id'], 'MonthlyLabs'));
        $rules->add($rules->existsIn(['test_id'], 'SampleApplicableTest'));

        return $rules;
    }
}
