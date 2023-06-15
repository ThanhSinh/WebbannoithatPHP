<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sanpham extends Model
{
    protected $table = 'sanpham';
    protected $primaryKey = 'MaSP';
    protected $fillable = [
        'MaSP',
        'hang',
        'tensp',
        'mota',
        'sl',
        'gia',
        'image',
        'image1',
        'image2',
        'image3d',
        'MaLSP',
    ];
    public function loaisanpham()
    {
        return $this->belongsTo(Loaisanpham::class, 'MaLSP', 'MaLSP');
    }
}
