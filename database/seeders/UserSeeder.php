<?php

require './vendor/autoload.php';

use Phinx\Seed\AbstractSeed;

class UserSeeder extends AbstractSeed
{
    public function run(): void
    {
        $faker = Faker\Factory::create('pt_BR');

        $data = [
            [
                'name' => 'Thiago Ferreira',
                'cpf' => $faker->cpf(false),
                'email' => 'thiago@gmail.com',
                'birthdate' => '2003-12-06',
                'password' => '$2a$10$mwtpEH46gh0fzCvUwaMNVegHDhqNitK8NbDHuyZRQlOlU1mf.zsfG', // 123456789
                'wallet' => 10000.00,
                'address' => $faker->address(),
                'city_id' => 5270, // São Paulo
                'state_id' => 26 // São Paulo
            ],
            [
                'name' => $faker->name(),
                'cpf' => $faker->cpf(false),
                'email' => $faker->email(),
                'birthdate' => $faker->date(),
                'password' => '$2a$10$mwtpEH46gh0fzCvUwaMNVegHDhqNitK8NbDHuyZRQlOlU1mf.zsfG', // 123456789
                'wallet' => 10000.00,
                'address' => $faker->address(),
                'city_id' => 5270, // São Paulo
                'state_id' => 26 // São Paulo
            ],
            [
                'name' => $faker->name(),
                'cpf' => $faker->cpf(false),
                'email' => $faker->email(),
                'birthdate' => $faker->date(),
                'password' => '$2a$10$mwtpEH46gh0fzCvUwaMNVegHDhqNitK8NbDHuyZRQlOlU1mf.zsfG', // 123456789
                'wallet' => 10000.00,
                'address' => $faker->address(),
                'city_id' => 5270, // São Paulo
                'state_id' => 26 // São Paulo
            ],
            [
                'name' => $faker->name(),
                'cpf' => $faker->cpf(false),
                'email' => $faker->email(),
                'birthdate' => $faker->date(),
                'password' => '$2a$10$mwtpEH46gh0fzCvUwaMNVegHDhqNitK8NbDHuyZRQlOlU1mf.zsfG', // 123456789
                'wallet' => 10000.00,
                'address' => $faker->address(),
                'city_id' => 5270, // São Paulo
                'state_id' => 26 // São Paulo
            ],
            [
                'name' => $faker->name(),
                'cpf' => $faker->cpf(false),
                'email' => $faker->email(),
                'birthdate' => $faker->date(),
                'password' => '$2a$10$mwtpEH46gh0fzCvUwaMNVegHDhqNitK8NbDHuyZRQlOlU1mf.zsfG', // 123456789
                'wallet' => 10000.00,
                'address' => $faker->address(),
                'city_id' => 5270, // São Paulo
                'state_id' => 26 // São Paulo
            ],
            [
                'name' => $faker->name(),
                'cpf' => $faker->cpf(false),
                'email' => $faker->email(),
                'birthdate' => $faker->date(),
                'password' => '$2a$10$mwtpEH46gh0fzCvUwaMNVegHDhqNitK8NbDHuyZRQlOlU1mf.zsfG', // 123456789
                'wallet' => 10000.00,
                'address' => $faker->address(),
                'city_id' => 5270, // São Paulo
                'state_id' => 26 // São Paulo
            ],
        ];

        $table = $this->table('users');
        $table->insert($data)->saveData();
    }
}
