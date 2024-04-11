<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Payment Entity
 *
 * @property string $id
 * @property string $status
 * @property string $method
 * @property string $discount
 * @property string|null $card_number
 * @property string|null $card_cvv
 * @property \Cake\I18n\Date|null $card_expiry
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 * @property string $order_id
 *
 * @property \App\Model\Entity\Order $order
 * @property \App\Model\Entity\Refund[] $refunds
 */
class Payment extends Entity
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
        'method' => true,
        'discount' => true,
        'card_number' => true,
        'card_cvv' => true,
        'card_expiry' => true,
        'created' => true,
        'modified' => true,
        'order_id' => true,
        'order' => true,
        'refunds' => true,
    ];
}
