<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UsersAccess Model
 *
 * @method \App\Model\Entity\UsersAcces get($primaryKey, $options = [])
 * @method \App\Model\Entity\UsersAcces newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UsersAcces[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UsersAcces|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UsersAcces patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UsersAcces[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UsersAcces findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersAccessTable extends Table
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

        $this->setTable('users_access');
        $this->setDisplayField('access_id');
        $this->setPrimaryKey('access_id');

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
            ->integer('access_id')
            ->allowEmpty('access_id', 'create');

        $validator
            ->scalar('access_login')
            ->maxLength('access_login', 255)
            ->requirePresence('access_login', 'create')
            ->notEmpty('access_login');

        $validator
            ->scalar('access_password')
            ->maxLength('access_password', 255)
            ->allowEmpty('access_password');

        return $validator;
    }
}
