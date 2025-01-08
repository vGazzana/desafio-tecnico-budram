<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class TransportadoraSeeder extends Seeder
{
    public function run(): void
    {
        // Carregar o JSON de transportadoras
        $json = File::get(database_path('seeders/data/API_LISTAGEM_TRANSPORTADORAS.json'));
        $data = json_decode($json, true);

        // Inserir no banco apenas os dados de transportadoras
        foreach ($data['data'] as $transportadora) {
            DB::table('transportadoras')->insert([
                'id' => $transportadora['_id'],
                'cnpj' => $transportadora['_cnpj'],
                'fantasia' => $transportadora['_fantasia'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}