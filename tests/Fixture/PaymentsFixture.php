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
                'id' => 'afa4d5df-257f-4271-8ad6-a86b49e1702d',
                'status' => 'Lorem ipsum dolor sit amet',
                'method' => 'Lorem ipsum dolor sit amet',
                'discount' => 1.5,
                'card_number' => 'Lorem ipsum dolor',
                'card_cvv' => 'Lo',
                'card_expiry' => '2024-04-11',
                'created' => 1712808588,
                'modified' => 1712808588,
                'order_id' => '4519d70f-80e5-4cca-8b85-7bfa5daf313d',
            ],
        ];
        parent::init();
    }
}
