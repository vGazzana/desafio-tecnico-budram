<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntregasTable extends Migration
{
    public function up(): void
    {
        Schema::create('entregas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('transportadora_id');
            $table->integer('volumes');
            $table->string('remetente_nome');
            $table->string('destinatario_nome');
            $table->string('destinatario_cpf', 11);
            $table->string('destinatario_endereco');
            $table->string('destinatario_estado');
            $table->string('destinatario_cep', 9);
            $table->string('destinatario_pais');
            $table->decimal('geolocalizacao_lat', 10, 7);
            $table->decimal('geolocalizacao_lng', 10, 7);
            $table->timestamps();

            $table->foreign('transportadora_id')->references('id')->on('transportadoras')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('entregas');
    }
}

