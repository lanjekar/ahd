<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SampleApplicableTest Model
 *
 * @property \App\Model\Table\SampleRegistrationTable|\Cake\ORM\Association\BelongsTo $SampleRegistration
 * @property \App\Model\Table\LabSampleDataTable|\Cake\ORM\Association\BelongsTo $LabSampleData
 * @property \App\Model\Table\TestListsTable|\Cake\ORM\Association\BelongsTo $TestLists
 * @property \App\Model\Table\DiseasesTable|\Cake\ORM\Association\BelongsTo $Diseases
 *
 * @method \App\Model\Entity\SampleApplicableTest get($primaryKey, $options = [])
 * @method \App\Model\Entity\SampleApplicableTest newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SampleApplicableTest[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SampleApplicableTest|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SampleApplicableTest patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SampleApplicableTest[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SampleApplicableTest findOrCreate($search, callable $callback = null, $options = [])
 */
class SampleApplicableTestTable extends Table
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

        $this->setTable('sample_applicable_test');
        $this->setDisplayField('test_id');
        $this->setPrimaryKey('test_id');

        $this->belongsTo('SampleRegistration', [
            'foreignKey' => 'sample_reg_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('LabSampleData', [
            'foreignKey' => 'sample_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('TestLists', [
            'foreignKey' => 'test_list_id',
            'joinType' => 'INNER'
        ]);
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
            ->integer('test_id')
            ->allowEmpty('test_id', 'create');

        $validator
            ->dateTime('test_date')
            ->requirePresence('test_date', 'create')
            ->notEmpty('test_date');

        $validator
            ->scalar('test_result')
            ->maxLength('test_result', 255)
            ->requirePresence('test_result', 'create')
            ->notEmpty('test_result');

        $validator
            ->dateTime('observation_date')
            ->requirePresence('observation_date', 'create')
            ->notEmpty('observation_date');

        $validator
            ->integer('observation_result')
            ->requirePresence('observation_result', 'create')
            ->notEmpty('observation_result');

        $validator
            ->dateTime('communication_date')
            ->requirePresence('communication_date', 'create')
            ->notEmpty('communication_date');

        $validator
            ->scalar('communication_result')
            ->maxLength('communication_result', 255)
            ->requirePresence('communication_result', 'create')
            ->notEmpty('communication_result');

        $validator
            ->scalar('action_taken')
            ->maxLength('action_taken', 255)
            ->requirePresence('action_taken', 'create')
            ->notEmpty('action_taken');

        $validator
            ->scalar('test_suggestion')
            ->maxLength('test_suggestion', 1000)
            ->requirePresence('test_suggestion', 'create')
            ->notEmpty('test_suggestion');

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
        $rules->add($rules->existsIn(['sample_id'], 'LabSampleData'));
        $rules->add($rules->existsIn(['test_list_id'], 'TestLists'));
        $rules->add($rules->existsIn(['disease_id'], 'Diseases'));

        return $rules;
    }
}
