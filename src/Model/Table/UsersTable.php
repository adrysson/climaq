<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
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

        $this->addBehavior('Timestamp');
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
            ->scalar('user_name')
            ->maxLength('user_name', 255)
            ->requirePresence('user_name', 'create')
            ->notEmpty('user_name');

        $validator
            ->scalar('user_email')
            ->maxLength('user_email', 255)
            ->requirePresence('user_email', 'create')
            ->notEmpty('user_email')
            ->add('user_email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('user_cep')
            ->maxLength('user_cep', 255)
            ->requirePresence('user_cep', 'create')
            ->notEmpty('user_cep');

        $validator
            ->scalar('user_city')
            ->maxLength('user_city', 255)
            ->requirePresence('user_city', 'create')
            ->notEmpty('user_city');

        $validator
            ->scalar('user_state')
            ->maxLength('user_state', 255)
            ->requirePresence('user_state', 'create')
            ->notEmpty('user_state');

        $validator
            ->scalar('user_password')
            ->maxLength('user_password', 255)
            ->requirePresence('user_password', 'create')
            ->notEmpty('user_password');

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
        $rules->add($rules->isUnique(['user_email']));

        return $rules;
    }
}
