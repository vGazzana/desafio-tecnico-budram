<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportadorasTable extends Migration
{
    public function up(): void
    {
        Schema::create('transportadoras', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('cnpj', 14)->unique();
            $table->string('fantasia');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('transportadoras');
    }
}
