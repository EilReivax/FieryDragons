<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Authentication\PasswordHasher\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property string $id
 * @property string $given_name
 * @property string $family_name
 * @property string $phone
 * @property string $email
 * @property string $password
 * @property string|null $nonce
 * @property \Cake\I18n\DateTime|null $nonce_expiry
 * @property string|null $address
 * @property string|null $suburb
 * @property string|null $state
 * @property int|null $postcode
 * @property string|null $card_number
 * @property string|null $card_cvv
 * @property \Cake\I18n\Date|null $card_expiry
 * @property bool $admin
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 *
 * @property \App\Model\Entity\Order[] $orders
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
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'given_name' => true,
        'family_name' => true,
        'phone' => true,
        'email' => true,
        'password' => true,
        'nonce' => true,
        'nonce_expiry' => true,
        'admin' => true,
        'created' => true,
        'modified' => true,
        'orders' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var list<string>
     */
    protected array $_hidden = [
        'password',
    ];

    /**
     * Hashing password for User entity
     *
     * @param string $password Password field
     * @return string|null hashed password
     * @see \App\Model\Entity\User::$password
     */
    protected function _setPassword(string $password): ?string
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher())->hash($password);
        }

        return $password;
    }

}
