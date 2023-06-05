<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CategoriesMigration extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('categories');
        
        $table->addColumn('name', 'string', ['limit' => '200'])
        ->addColumn('created_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
        ->addColumn('update_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
        ->create();
    }
}
