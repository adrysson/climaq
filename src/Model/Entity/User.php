<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $user_id
 * @property string $user_name
 * @property string $user_email
 * @property string $user_cep
 * @property string $user_city
 * @property string $user_state
 * @property string $user_password
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\UsersAcces $access
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'user_name' => true,
        'user_email' => true,
        'user_cep' => true,
        'user_city' => true,
        'user_state' => true,
        'user_password' => true,
        'created' => true,
        'modified' => true,
        'access' => true
    ];
}
