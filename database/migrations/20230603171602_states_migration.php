<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class StatesMigration extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('states');

        $table->addColumn('name', 'string', ['limit' => 25])
        ->addColumn('uf', 'char', ['limit' => 2])
        ->create();
    }
}
