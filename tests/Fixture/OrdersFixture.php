<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OrdersFixture
 */
class OrdersFixture extends TestFixture
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
                'id' => 'ed968384-6f61-4bdf-a395-88752c05da82',
                'status' => 'Lorem ipsum dolor sit amet',
                'delivery_method' => 'Lorem ipsum dolor sit amet',
                'subtotal' => 1.5,
                'note' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'created' => 1712807718,
                'modified' => 1712807718,
                'customer_id' => 'd7e8d8ad-666a-42e9-9166-fa9fa1e7d24c',
            ],
        ];
        parent::init();
    }
}
