<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
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
                'id' => '9ebed1ec-b7ac-4729-9f58-bb69a55ce69f',
                'given_name' => 'Lorem ipsum dolor sit amet',
                'family_name' => 'Lorem ipsum dolor sit amet',
                'phone' => 'Lorem ipsum do',
                'email' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'nonce' => 'Lorem ipsum dolor sit amet',
                'nonce_expiry' => '2024-04-15 05:11:22',
                'address' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'suburb' => 'Lorem ipsum dolor sit amet',
                'state' => 'L',
                'postcode' => 1,
                'card_number' => 'Lorem ipsum dolor',
                'card_cvv' => 'Lo',
                'card_expiry' => '2024-04-15',
                'admin' => 1,
                'created' => 1713157882,
                'modified' => 1713157882,
            ],
        ];
        parent::init();
    }
}
