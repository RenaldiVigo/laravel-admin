<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    protected $fillable=[
        'id_kategori',
        'nama_tugas',
        'ket_tugas',
        'status_tugas',
    ];
}
