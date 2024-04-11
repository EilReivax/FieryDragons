<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Delivery Entity
 *
 * @property string $id
 * @property string $address
 * @property string $suburb
 * @property string $state
 * @property string $postcode
 * @property string $fee
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 * @property string $order_id
 * @property string $staff_id
 *
 * @property \App\Model\Entity\Order $order
 * @property \App\Model\Entity\Staff $staff
 */
class Delivery extends Entity
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
        'address' => true,
        'suburb' => true,
        'state' => true,
        'postcode' => true,
        'fee' => true,
        'created' => true,
        'modified' => true,
        'order_id' => true,
        'staff_id' => true,
        'order' => true,
        'staff' => true,
    ];
}
