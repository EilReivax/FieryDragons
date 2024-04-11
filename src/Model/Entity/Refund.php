<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Refund Entity
 *
 * @property string $id
 * @property string $method
 * @property string $amount
 * @property string $reason
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 * @property string $payment_id
 *
 * @property \App\Model\Entity\Payment $payment
 */
class Refund extends Entity
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
        'method' => true,
        'amount' => true,
        'reason' => true,
        'created' => true,
        'modified' => true,
        'payment_id' => true,
        'payment' => true,
    ];
}
