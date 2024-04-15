<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PaymentsFixture
 */
class PaymentsFixture extends TestFixture
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
                'id' => 'd2cd9092-83e7-4f41-9a94-157cd20264ba',
                'status' => 'Lorem ipsum dolor sit amet',
                'method' => 'Lorem ipsum dolor sit amet',
                'discount' => 1.5,
                'card_number' => 'Lorem ipsum dolor',
                'card_cvv' => 'Lo',
                'card_expiry' => '2024-04-15',
                'created' => 1713157862,
                'modified' => 1713157862,
                'order_id' => '617c6f66-db38-4dd2-8d96-4603b342594e',
            ],
        ];
        parent::init();
    }
}
