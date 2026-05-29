<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

#[Fillabe(['name'])]

class Team extends Model
{
    // relacionamento de muito para muitos
    public function membership():HasMany{
        return $this->HasMany(MemberShip::class)
    }

    // relacionamento com projetos

   public function projets()
   {
       return $this->HasMany(Projets::class);
   }

}
