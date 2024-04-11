<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DeliveriesFixture
 */
class DeliveriesFixture extends TestFixture
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
                'id' => '3388e21f-79ce-4922-9aa2-f1672abdd24c',
                'address' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'suburb' => 'Lorem ipsum dolor sit amet',
                'state' => 'L',
                'postcode' => '',
                'fee' => 1.5,
                'created' => 1712806189,
                'modified' => 1712806189,
                'order_id' => '194bfa44-eb88-4072-869c-8cdcd874f70e',
                'staff_id' => '058194fc-e720-4161-9956-387738ce3991',
            ],
        ];
        parent::init();
    }
}
