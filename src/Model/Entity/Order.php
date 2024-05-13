<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity
 *
 * @property int $id
 * @property string $delivery_method
 * @property string $status
 * @property string $address
 * @property string $suburb
 * @property string $state
 * @property int $postcode
 * @property string $delivery_fee
 * @property string $subtotal
 * @property string|null $note
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 * @property int $user_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Item[] $items
 */
class Order extends Entity
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
        'delivery_method' => true,
        'status' => true,
        'address' => true,
        'suburb' => true,
        'state' => true,
        'postcode' => true,
        'delivery_fee' => true,
        'subtotal' => true,
        'note' => true,
        'created' => true,
        'modified' => true,
        'user_id' => true,
        'user' => true,
        'items' => true,
    ];
}
