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
            ->maxLength('user_name', 255, 'O nome deve ter no máximo 255 caracteres')
            ->requirePresence('user_name', 'create')
            ->notEmpty('user_name', 'Este campo é de preenchimento obrigatório');

        $validator
            ->scalar('user_email')
            ->minLength('user_email', 5, 'O campo e-mail deve ter no mínimo 5 caracteres')
            ->maxLength('user_email', 255, 'O campo e-mail deve ter no máximo 255 caracteres')
            ->requirePresence('user_email', 'create')
            ->notEmpty('user_email', 'Este campo é de preenchimento obrigatório')
            ->add('user_email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table', 'message'=>'Já existe um usuário com este e-mail'])
            ->add('user_email', 'validFormat', ['rule' => 'email', 'message' => 'O email digitado deve ser válido']);

        $validator
            ->scalar('user_cep')
            ->maxLength('user_cep', 8, 'O CEP deve ter no máximo 8 caracteres')
            ->requirePresence('user_cep', 'create');

        $validator
            ->scalar('user_city')
            ->maxLength('user_city', 255, 'A cidade deve ter no máximo 255 caracteres')
            ->requirePresence('user_city', 'create')
            ->notEmpty('user_city', 'Este campo é de preenchimento obrigatório');

        $validator
            ->scalar('user_password')
            ->minLength('user_password', 6, 'A senha deve ter no mínimo 6 caracteres')
            ->maxLength('user_password', 255, 'A senha deve ter no máximo 255 caracteres')
            ->requirePresence('user_password', 'create')
            ->notEmpty('user_password', 'Este campo é de preenchimento obrigatório');

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
