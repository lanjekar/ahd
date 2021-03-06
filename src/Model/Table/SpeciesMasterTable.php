<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SpeciesMaster Model
 *
 * @method \App\Model\Entity\SpeciesMaster get($primaryKey, $options = [])
 * @method \App\Model\Entity\SpeciesMaster newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SpeciesMaster[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SpeciesMaster|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SpeciesMaster patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SpeciesMaster[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SpeciesMaster findOrCreate($search, callable $callback = null, $options = [])
 */
class SpeciesMasterTable extends Table
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

        $this->setTable('species_master');
        $this->setDisplayField('species_id');
        $this->setPrimaryKey('species_id');
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
            ->integer('species_id')
            ->allowEmpty('species_id', 'create');

        $validator
            ->scalar('species_name')
            ->maxLength('species_name', 255)
            ->requirePresence('species_name', 'create')
            ->notEmpty('species_name');

        $validator
            ->integer('is_active')
            ->requirePresence('is_active', 'create')
            ->notEmpty('is_active');

        $validator
            ->dateTime('created_on')
            ->requirePresence('created_on', 'create')
            ->notEmpty('created_on');

        $validator
            ->integer('created_by')
            ->requirePresence('created_by', 'create')
            ->notEmpty('created_by');

        $validator
            ->dateTime('modified_on')
            ->requirePresence('modified_on', 'create')
            ->notEmpty('modified_on');

        $validator
            ->integer('modified_by')
            ->requirePresence('modified_by', 'create')
            ->notEmpty('modified_by');

        return $validator;
    }
}
