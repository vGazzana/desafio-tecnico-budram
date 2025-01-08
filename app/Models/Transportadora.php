<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transportadora extends Model
{
    use HasFactory;

    protected $table = 'transportadoras';
    protected $keyType = 'string'; 
    public $incrementing = false;

    protected $fillable = [
        'id',
        'cnpj',
        'fantasia',
    ];

    public function entregas()
    {
        return $this->hasMany(Entrega::class, 'transportadora_id', 'id');
    }
}
