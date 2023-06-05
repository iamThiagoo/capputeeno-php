<?php

use Phinx\Seed\AbstractSeed;

class StateSeeder extends AbstractSeed
{
    public function run(): void
    {
        $sql = file_get_contents('database/sql/states.sql');
        $this->query($sql);
    }
}
