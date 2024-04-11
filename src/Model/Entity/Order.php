<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity
 *
 * @property string $id
 * @property string $status
 * @property string $delivery_method
 * @property string $subtotal
 * @property string|null $note
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 * @property string $customer_id
 *
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\Delivery[] $deliveries
 * @property \App\Model\Entity\Payment[] $payments
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
        'status' => true,
        'delivery_method' => true,
        'subtotal' => true,
        'note' => true,
        'created' => true,
        'modified' => true,
        'customer_id' => true,
        'customer' => true,
        'deliveries' => true,
        'payments' => true,
        'items' => true,
    ];
}
