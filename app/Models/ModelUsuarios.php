<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ModelUsuarios extends Model
{
    use HasFactory;

    public static function Registrar_nuevo_usuario($data){
        return DB::table('usuarios')->insert($data);
    }
}
