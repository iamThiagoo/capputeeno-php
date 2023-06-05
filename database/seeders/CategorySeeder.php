<?php


use Phinx\Seed\AbstractSeed;

class CategorySeeder extends AbstractSeed
{
    public function run(): void
    {
        $data = [
            [
                'name' => 'Camisetas'
            ], [
                'name' => 'Canecas'
            ]
        ];

        $table = $this->table('categories');
        $table->insert($data)->saveData();
    }
}
