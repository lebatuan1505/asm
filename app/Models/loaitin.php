<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loaitin extends Model
{
    protected $table='loaitin';
    protected $primaryKey='id';
    // protected $dates=['ngayDang'];
    protected $fillable=[
        'lang',
        'ten',
        'noidung',
        'thuTu',
        'anHien',
    ];
    public function tintuc(){
        return $this->hasMayny('App\Models\tin', 'idLT');
    }
}
