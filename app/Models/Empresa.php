<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    public function users(){
        return $this->HasMany( user::class);
    }
    public function empresa() {
        return $this->belongsTo( empresa::class);

    }
}
