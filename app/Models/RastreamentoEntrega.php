<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RastreamentoEntrega extends Model
{
    use HasFactory;

    protected $table = 'rastreamento_entregas';

    protected $fillable = [
        'entrega_id',
        'message',
        'date',
    ];

    public function entrega()
    {
        return $this->belongsTo(Entrega::class, 'entrega_id', 'id');
    }
}
