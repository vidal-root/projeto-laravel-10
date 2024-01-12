<?php

namespace Database\Seeders;

use App\Models\ProdutoModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProdutoModel::create(
            [
                'nome' => 'Luis Felipe',
                'valor' => 20.45
            ]
        );
    }
}
