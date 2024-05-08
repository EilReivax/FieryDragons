<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class RemoveDetailsFromUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('users');
        $table->removeColumn('address');
        $table->removeColumn('suburb');
        $table->removeColumn('state');
        $table->removeColumn('postcode');
        $table->removeColumn('card_number');
        $table->removeColumn('card_cvv');
        $table->removeColumn('card_expiry');
        $table->removeIndex([
        'state',
    ]);
        $table->update();
    }
}
