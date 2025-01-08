<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class EntregaSeeder extends Seeder
{
    public function run(): void
    {
        $json = File::get(database_path('seeders/data/API_LISTAGEM_ENTREGAS.json'));
        $data = json_decode($json, true);

        foreach ($data['data'] as $entrega) {
            // Inserir a entrega
            DB::table('entregas')->insert([
                'id' => $entrega['_id'],
                'transportadora_id' => $entrega['_id_transportadora'],
                'volumes' => $entrega['_volumes'],
                'remetente_nome' => $entrega['_remetente']['_nome'],
                'destinatario_nome' => $entrega['_destinatario']['_nome'],
                'destinatario_cpf' => $entrega['_destinatario']['_cpf'],
                'destinatario_endereco' => $entrega['_destinatario']['_endereco'],
                'destinatario_estado' => $entrega['_destinatario']['_estado'],
                'destinatario_cep' => $entrega['_destinatario']['_cep'],
                'destinatario_pais' => $entrega['_destinatario']['_pais'],
                'geolocalizacao_lat' => $entrega['_destinatario']['_geolocalizao']['_lat'],
                'geolocalizacao_lng' => $entrega['_destinatario']['_geolocalizao']['_lng'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            foreach ($entrega['_rastreamento'] as $evento) {
                DB::table('rastreamento_entregas')->insert([
                    'entrega_id' => $entrega['_id'],
                    'message' => $evento['message'],
                    'date' => $evento['date'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}