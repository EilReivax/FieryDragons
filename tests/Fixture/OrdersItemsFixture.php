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
                'order_id' => '1b7c88d7-5729-451a-8488-570930a4e755',
                'item_id' => '58f9db40-fd45-48d4-a9e1-ecd09a31abaf',
                'quantity' => 1,
            ],
        ];
        parent::init();
    }
}
