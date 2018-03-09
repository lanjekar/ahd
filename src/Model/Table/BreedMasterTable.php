<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BreedMaster Model
 *
 * @property \App\Model\Table\SpeciesMasterTable|\Cake\ORM\Association\BelongsTo $SpeciesMaster
 *
 * @method \App\Model\Entity\BreedMaster get($primaryKey, $options = [])
 * @method \App\Model\Entity\BreedMaster newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\BreedMaster[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BreedMaster|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BreedMaster patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BreedMaster[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\BreedMaster findOrCreate($search, callable $callback = null, $options = [])
 */
class BreedMasterTable extends Table
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

        $this->setTable('breed_master');
        $this->setDisplayField('breed_id');
        $this->setPrimaryKey('breed_id');

        $this->belongsTo('SpeciesMaster', [
            'foreignKey' => 'species_id',
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
            ->integer('breed_id')
            ->allowEmpty('breed_id', 'create');

        $validator
            ->scalar('breed_name')
            ->maxLength('breed_name', 255)
            ->requirePresence('breed_name', 'create')
            ->notEmpty('breed_name');

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

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['species_id'], 'SpeciesMaster'));

        return $rules;
    }
}
