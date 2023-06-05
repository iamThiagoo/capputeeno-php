<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CitiesMigration extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('cities');

        $table->addColumn('name', 'string', ['limit' => 100])
        ->addColumn('state_id', 'integer')->addForeignKey('state_id', 'states', 'id')
        ->addColumn('ibge','integer')
        ->create();
    }
}
