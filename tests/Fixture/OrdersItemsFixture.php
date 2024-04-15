<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OrdersItemsFixture
 */
class OrdersItemsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'order_id' => '6de3e0dd-bd1f-48b4-ab42-ab7ae5bb113a',
                'item_id' => 'd4357569-db01-4f8c-b937-c3c6cad752f4',
                'quantity' => 1,
            ],
        ];
        parent::init();
    }
}
