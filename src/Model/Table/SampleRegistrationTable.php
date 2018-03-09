<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SampleRegistration Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\YearlySamplesTable|\Cake\ORM\Association\BelongsTo $YearlySamples
 * @property \App\Model\Table\MonthlySamplesTable|\Cake\ORM\Association\BelongsTo $MonthlySamples
 * @property \App\Model\Table\StatesTable|\Cake\ORM\Association\BelongsTo $States
 * @property \App\Model\Table\DistrictsTable|\Cake\ORM\Association\BelongsTo $Districts
 * @property \App\Model\Table\DispatchesTable|\Cake\ORM\Association\BelongsTo $Dispatches
 *
 * @method \App\Model\Entity\SampleRegistration get($primaryKey, $options = [])
 * @method \App\Model\Entity\SampleRegistration newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SampleRegistration[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SampleRegistration|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SampleRegistration patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SampleRegistration[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SampleRegistration findOrCreate($search, callable $callback = null, $options = [])
 */
class SampleRegistrationTable extends Table
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

        $this->setTable('sample_registration');
        $this->setDisplayField('sample_reg_id');
        $this->setPrimaryKey('sample_reg_id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('YearlySamples', [
            'foreignKey' => 'yearly_sample_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('MonthlySamples', [
            'foreignKey' => 'monthly_sample_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('States', [
            'foreignKey' => 'state_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Districts', [
            'foreignKey' => 'district_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Dispatches', [
            'foreignKey' => 'dispatch_id',
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
            ->integer('sample_reg_id')
            ->allowEmpty('sample_reg_id', 'create');

        $validator
            ->dateTime('date_of_recevied')
            ->requirePresence('date_of_recevied', 'create')
            ->notEmpty('date_of_recevied');

        $validator
            ->dateTime('date_of_registration')
            ->requirePresence('date_of_registration', 'create')
            ->notEmpty('date_of_registration');

        $validator
            ->scalar('institute_name')
            ->maxLength('institute_name', 255)
            ->requirePresence('institute_name', 'create')
            ->notEmpty('institute_name');

        $validator
            ->scalar('owner_name')
            ->maxLength('owner_name', 255)
            ->requirePresence('owner_name', 'create')
            ->notEmpty('owner_name');

        $validator
            ->scalar('owner_address')
            ->maxLength('owner_address', 255)
            ->requirePresence('owner_address', 'create')
            ->notEmpty('owner_address');

        $validator
            ->scalar('owner_mobile')
            ->maxLength('owner_mobile', 255)
            ->requirePresence('owner_mobile', 'create')
            ->notEmpty('owner_mobile');

        $validator
            ->scalar('owner_email')
            ->maxLength('owner_email', 255)
            ->requirePresence('owner_email', 'create')
            ->notEmpty('owner_email');

        $validator
            ->integer('letter_no')
            ->requirePresence('letter_no', 'create')
            ->notEmpty('letter_no');

        $validator
            ->dateTime('letter_date')
            ->requirePresence('letter_date', 'create')
            ->notEmpty('letter_date');

        $validator
            ->integer('no_of_samples')
            ->requirePresence('no_of_samples', 'create')
            ->notEmpty('no_of_samples');

        $validator
            ->integer('amount')
            ->requirePresence('amount', 'create')
            ->notEmpty('amount');

        $validator
            ->integer('receipt_no')
            ->requirePresence('receipt_no', 'create')
            ->notEmpty('receipt_no');

        $validator
            ->dateTime('receipt_date')
            ->requirePresence('receipt_date', 'create')
            ->notEmpty('receipt_date');

        $validator
            ->scalar('out_no')
            ->maxLength('out_no', 11)
            ->requirePresence('out_no', 'create')
            ->notEmpty('out_no');

        $validator
            ->dateTime('out_date')
            ->requirePresence('out_date', 'create')
            ->notEmpty('out_date');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['yearly_sample_id'], 'YearlySamples'));
        $rules->add($rules->existsIn(['monthly_sample_id'], 'MonthlySamples'));
        $rules->add($rules->existsIn(['state_id'], 'States'));
        $rules->add($rules->existsIn(['district_id'], 'Districts'));
        $rules->add($rules->existsIn(['dispatch_id'], 'Dispatches'));

        return $rules;
    }
}
