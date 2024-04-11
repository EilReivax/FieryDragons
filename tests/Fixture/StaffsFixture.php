<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StaffsFixture
 */
class StaffsFixture extends TestFixture
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
                'id' => '2fb4d53d-5f24-4bf1-858d-7214519c8d31',
                'given_name' => 'Lorem ipsum dolor sit amet',
                'family_name' => 'Lorem ipsum dolor sit amet',
                'phone' => 'Lorem ipsum do',
                'email' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'role' => 'Lorem ipsum dolor sit amet',
                'created' => 1712814603,
                'modified' => 1712814603,
            ],
        ];
        parent::init();
    }
}
