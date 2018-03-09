<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\LabMasterTable|\Cake\ORM\Association\BelongsTo $LabMaster
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('user_id');
        $this->setPrimaryKey('user_id');

        $this->belongsTo('LabMaster', [
            'foreignKey' => 'lab_id',
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
            ->integer('user_id')
            ->allowEmpty('user_id', 'create');

        $validator
            ->scalar('username')
            ->maxLength('username', 255)
            ->requirePresence('username', 'create')
            ->notEmpty('username');

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 255)
            ->requirePresence('first_name', 'create')
            ->notEmpty('first_name');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 255)
            ->requirePresence('last_name', 'create')
            ->notEmpty('last_name');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->scalar('mobile')
            ->maxLength('mobile', 255)
            ->requirePresence('mobile', 'create')
            ->notEmpty('mobile');

        $validator
            ->scalar('user_role')
            ->maxLength('user_role', 255)
            ->requirePresence('user_role', 'create')
            ->notEmpty('user_role');

        $validator
            ->scalar('village')
            ->maxLength('village', 255)
            ->requirePresence('village', 'create')
            ->notEmpty('village');

        $validator
            ->scalar('taluka')
            ->maxLength('taluka', 255)
            ->requirePresence('taluka', 'create')
            ->notEmpty('taluka');

        $validator
            ->scalar('state')
            ->maxLength('state', 255)
            ->requirePresence('state', 'create')
            ->notEmpty('state');

        $validator
            ->scalar('district')
            ->maxLength('district', 255)
            ->requirePresence('district', 'create')
            ->notEmpty('district');

        $validator
            ->scalar('is_active')
            ->maxLength('is_active', 255)
            ->requirePresence('is_active', 'create')
            ->notEmpty('is_active');

        $validator
            ->integer('created_by')
            ->requirePresence('created_by', 'create')
            ->notEmpty('created_by');

        $validator
            ->dateTime('created_on')
            ->requirePresence('created_on', 'create')
            ->notEmpty('created_on');

        $validator
            ->integer('modified_by')
            ->requirePresence('modified_by', 'create')
            ->notEmpty('modified_by');

        $validator
            ->dateTime('modified_on')
            ->requirePresence('modified_on', 'create')
            ->notEmpty('modified_on');

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
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['lab_id'], 'LabMaster'));

        return $rules;
    }
}
