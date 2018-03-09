<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LabMaster Model
 *
 * @method \App\Model\Entity\LabMaster get($primaryKey, $options = [])
 * @method \App\Model\Entity\LabMaster newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\LabMaster[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LabMaster|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LabMaster patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LabMaster[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\LabMaster findOrCreate($search, callable $callback = null, $options = [])
 */
class LabMasterTable extends Table
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

        $this->setTable('lab_master');
        $this->setDisplayField('lab_id');
        $this->setPrimaryKey('lab_id');
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
            ->integer('lab_id')
            ->allowEmpty('lab_id', 'create');

        $validator
            ->scalar('lab_name')
            ->maxLength('lab_name', 255)
            
            ->requirePresence('lab_name', 'create')
            ->notEmpty('lab_name');

//        $validator
//            ->scalar('is_active')
//            ->maxLength('is_active', 255)
//            ->requirePresence('is_active', 'create')
//            ->notEmpty('is_active');
//
//        $validator
//            ->dateTime('created_on')
//            ->requirePresence('created_on', 'create')
//            ->notEmpty('created_on');
//
//        $validator
//            ->integer('created_by')
//            ->requirePresence('created_by', 'create')
//            ->notEmpty('created_by');
//
//        $validator
//            ->dateTime('modified_on')
//            ->requirePresence('modified_on', 'create')
//            ->notEmpty('modified_on');
//
//        $validator
//            ->integer('modified_by')
//            ->requirePresence('modified_by', 'create')
//            ->notEmpty('modified_by');

        return $validator;
    }
}
