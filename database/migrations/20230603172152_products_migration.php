<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class ProductsMigration extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('products');

        $table->addColumn('name', 'string' , ['limit' => 200])
        ->addColumn('value', 'float')
        ->addColumn('detail', 'text')
        ->addColumn('stock', 'integer')
        ->addColumn('status', 'boolean')
        ->addColumn('images', 'json')
        ->addColumn('category_id', 'integer')->addForeignKey('category_id', 'categories', 'id')
        ->addColumn('created_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
        ->addColumn('update_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
        ->create();
    }
}
