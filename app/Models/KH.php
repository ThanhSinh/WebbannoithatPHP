<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KH extends Model
{
    use HasFactory;
    protected $table = 'kh';
    protected $primaryKey = 'MaKH';
    protected $fillable = [
        'MaKH',
        'HoTen',
        'SDT',
        'tk',
        'mk',
        'diachi',
        'GioTinh'
    ];
}
