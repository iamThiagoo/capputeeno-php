<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class UsersWalletsMigration extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('users_wallets');

        $table->addColumn('user_id', 'integer')->addForeignKey('user_id', 'users', 'id')
        ->addColumn('value', 'float')
        ->addColumn('type', 'string')
        ->addColumn('created_at', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
        ->create();
    }
}
