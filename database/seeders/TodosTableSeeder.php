<?php

namespace Database\Seeders;

use App\Models\Todo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ver se é a primeira vez que está populando a tabela
        if (Todo::count() == 0) {
            Todo::create(['name' => 'Teste1', 'completed' => false]);
            Todo::create(['name' => 'Teste2', 'completed' => true]);
            Todo::create(['name' => 'Teste3', 'completed' => false]);
            Todo::create(['name' => 'Teste4', 'completed' => false]);
            Todo::create(['name' => 'Teste5', 'completed' => true]);
            Todo::create(['name' => 'Teste6', 'completed' => false]);
        }
    }
}

