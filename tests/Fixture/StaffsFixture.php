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
                'id' => '5f274cbc-040f-4693-98c1-5d3e201360eb',
                'given_name' => 'Lorem ipsum dolor sit amet',
                'family_name' => 'Lorem ipsum dolor sit amet',
                'phone' => 'Lorem ipsum do',
                'email' => 'Lorem ipsum dolor sit amet',
                'role' => 'Lorem ipsum dolor sit amet',
                'created' => 1712806130,
                'modified' => 1712806130,
            ],
        ];
        parent::init();
    }
}
