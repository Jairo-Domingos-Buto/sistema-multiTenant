<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

#[Fillable(["titulo", "prazo", "status", "prioridade", "comentario"])]
class Task extends Model
{
    public function casts(): array
    {
        return [
            "prazo" => "datetime",
        ];
    }

    //relacionamento com projetos
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
