<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransportadoraSeeder extends Seeder
{
    public function run(): void
    {
        $transportadoras = [
            ["id" => "1f0a1c69-3e02-4f40-a10e-1b8c80d5d7c6", "cnpj" => "1234567890001", "fantasia" => "SWIFT CARGO"],
            ["id" => "b03aae7e-2014-4a1b-8fbf-589f7e42c39e", "cnpj" => "9876543210001", "fantasia" => "BLUE ARROW LOGISTICS"],
        ];

        DB::table('transportadoras')->insert($transportadoras);
    }
}