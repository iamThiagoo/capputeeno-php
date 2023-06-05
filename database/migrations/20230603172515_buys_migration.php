<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class BuysMigration extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('buys');

        $table->addColumn('product_id', 'integer')
        ->addColumn('value', 'float')
        ->addColumn('address', 'text')
        ->addColumn('user_id', 'integer')->addForeignKey('user_id', 'users', 'id')
        ->addColumn('status', 'string',)
        ->addColumn('created_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
        ->addColumn('update_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
        ->create();
    }
}
