<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RefundsFixture
 */
class RefundsFixture extends TestFixture
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
                'id' => '81ac10c6-4658-417f-a86c-b2a0e064df86',
                'method' => 'Lorem ipsum dolor sit amet',
                'amount' => 1.5,
                'reason' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'created' => 1712808611,
                'modified' => 1712808611,
                'payment_id' => 'dbc8e1aa-9158-4d2e-a81b-e2ca0ed44d39',
            ],
        ];
        parent::init();
    }
}
