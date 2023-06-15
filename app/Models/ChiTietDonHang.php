<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietDonHang extends Model
{
    protected $table = 'ctdonhang';
    protected $primaryKey = 'MaCTHoaDon';
    protected $fillable = [
        'MaCTHoaDon',
        'soluong',
        'MaSP',
        'MaHoaDon',
        
    ];
    public function sanpham()
    {
        return $this->belongsTo(Sanpham::class, 'MaSP', 'MaSP');
    }
    public function donhang()
    {
        return $this->belongsTo(DonHang::class, 'MaHoaDon', 'MaHoaDon');
    }
}
