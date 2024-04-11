<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Item Entity
 *
 * @property string $id
 * @property string $name
 * @property string|null $description
 * @property string $price
 * @property string $type
 * @property bool $availability
 * @property string|null $photo
 *
 * @property \App\Model\Entity\Order[] $orders
 */
class Item extends Entity
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
        'name' => true,
        'description' => true,
        'price' => true,
        'type' => true,
        'availability' => true,
        'photo' => true,
        'orders' => true,
    ];
}
