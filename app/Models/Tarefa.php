<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Tarefa extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'id',
        'titulo',
        'descricao',
        'data_criacao',
        'data_inicio',
        'data_prevista',
        'data_conclusao',
        'status',
        'usuario_id',
        'categoria_id',
        'prioridade'
    ];

    public function usuarios()
    {
        return $this->belongsTo(User::class);
    }

    public function categoria(){
        return $this->hasOne(Categoria::class);
    }
}
