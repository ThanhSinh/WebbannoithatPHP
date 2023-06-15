<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonHang extends Model
{

    protected $primaryKey = 'MaHoaDon';
    public $incrementing = false;
    protected $table = 'donhang';
    protected $fillable = [
        'MaHoaDon',
        'ngaydat',
        'tongtien',
        'tinhtrang',
        'ghichu',
        'MaKH',
       
    ];
    public function kh()
    {
        return $this->belongsTo(KH::class, 'MaKH', 'MaKH');
    }
}
