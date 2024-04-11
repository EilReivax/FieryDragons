<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CustomersFixture
 */
class CustomersFixture extends TestFixture
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
                'id' => 'e0561205-7eef-47a1-b3f7-593ef8c0b8b6',
                'given_name' => 'Lorem ipsum dolor sit amet',
                'family_name' => 'Lorem ipsum dolor sit amet',
                'phone' => 'Lorem ipsum do',
                'email' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'address' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'suburb' => 'Lorem ipsum dolor sit amet',
                'state' => 'L',
                'postcode' => '',
                'card_number' => 'Lorem ipsum dolor',
                'card_cvv' => 'Lo',
                'card_expiry' => '2024-04-11',
                'created' => 1712814591,
                'modified' => 1712814591,
            ],
        ];
        parent::init();
    }
}
