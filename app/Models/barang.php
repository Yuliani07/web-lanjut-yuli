<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class barang extends Model
{
    use HasFactory;
    protected $table = "barang";

    public function rak (){
        return $this->belongsTo(rak::class, "id_rak","id");
    }

    public function pinjaman (){
        return $this->belongsToMany( barang ::class, "barang");
    }
}