<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model{
    protected $table = "mahasiswa";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','nama','alamat','divisi'
    ];
}