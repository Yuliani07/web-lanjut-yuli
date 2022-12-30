<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rak extends Model
{
    use HasFactory;
    protected $table = "rak";

    public function barang (){
        return $this->hasMany(barang::class, "id_rak","id");
    }
}