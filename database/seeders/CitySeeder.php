<?php


use Phinx\Seed\AbstractSeed;

class CitySeeder extends AbstractSeed
{
    public function getDependencies() : array
    {
        return [
            'StateSeeder'
        ];
    }

    public function run(): void
    {
        $sql = file_get_contents('database/sql/cities.sql');
        $this->query($sql);
    }
}
