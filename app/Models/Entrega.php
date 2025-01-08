<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrega extends Model
{
    use HasFactory;

    protected $table = 'entregas';
    protected $keyType = 'string'; // UUID
    public $incrementing = false; // Desativar auto incremento para UUID

    protected $fillable = [
        'id',
        'transportadora_id',
        'volumes',
        'remetente_nome',
        'destinatario_nome',
        'destinatario_cpf',
        'destinatario_endereco',
        'destinatario_estado',
        'destinatario_cep',
        'destinatario_pais',
        'geolocalizacao_lat',
        'geolocalizacao_lng',
    ];

    public function transportadora()
    {
        return $this->belongsTo(Transportadora::class, 'transportadora_id', 'id');
    }

    public function rastreamentos()
    {
        return $this->hasMany(RastreamentoEntrega::class, 'entrega_id', 'id');
    }
}
