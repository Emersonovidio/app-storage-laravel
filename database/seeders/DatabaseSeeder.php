<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::insert('insert into products (description, quantity, values, due date) values (?,?,?,?)', array('Arroz', 10, 10, '2023-12-01'));
        DB::insert('insert into products (description, quantity, values, due date) values (?,?,?,?)', array('Feijão', 8, 8.00, '2023-08-24'));
        DB::insert('insert into products (description, quantity, values, due date) values (?,?,?,?)', array('Óleo', 12, 5.99, '2023-10-01'));
        DB::insert('insert into products (description, quantity, values, due date) values (?,?,?,?)', array('Farinha', 20, 3.5, '2023-09-12'));
    }
}
