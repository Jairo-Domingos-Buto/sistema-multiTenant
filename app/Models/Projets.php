<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
#[Fillable(["name", "prazo"])]
class Projets extends Model
{
    public function casts(): array
    {
        return [
            "prazo" => "datetime",
        ];
    }

    // relacao com team
    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    // relacionamento com task
    public function task()
    {
        return $this->hasMany(Task::class);
    }
}
