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
                'id' => 'e521a778-3277-4dc4-ba57-da90f7235799',
                'method' => 'Lorem ipsum dolor sit amet',
                'amount' => 1.5,
                'reason' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'created' => 1713157870,
                'modified' => 1713157870,
                'payment_id' => '5dc75604-77f2-42a8-ab7b-48043f736de6',
            ],
        ];
        parent::init();
    }
}
