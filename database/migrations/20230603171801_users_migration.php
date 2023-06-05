<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class UsersMigration extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('users');

        $table->addColumn('name', 'string' , ['limit' => 100])
        ->addColumn('cpf', 'char', ['limit' => 11])->addIndex(['cpf'], ['unique' => true])
        ->addColumn('email', 'text', ['limit' => 100])->addIndex(['email'], ['unique' => true])
        ->addColumn('birthdate', 'date')
        ->addColumn('password', 'string')
        ->addColumn('wallet', 'float')
        ->addColumn('address', 'text')
        ->addColumn('city_id', 'integer')->addForeignKey('city_id', 'cities', 'id')
        ->addColumn('state_id', 'integer')->addForeignKey('state_id', 'states', 'id')
        ->create();
    }
}
