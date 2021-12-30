<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    protected $guarded=[];//asignacion masiva tkinter desde consola

    use HasFactory;
    // RELACIÓN POLIMÓRFICA DE UNO A UNO
    public function imageable()
    {
        return $this->morphTo();
    }
}
