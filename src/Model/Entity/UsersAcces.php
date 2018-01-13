<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UsersAcces Entity
 *
 * @property int $access_id
 * @property string $access_login
 * @property string $access_password
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class UsersAcces extends Entity
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
        'access_login' => true,
        'access_password' => true,
        'created' => true,
        'modified' => true
    ];
}
