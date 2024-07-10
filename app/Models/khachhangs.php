<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class khachhangs extends Model
{
    use HasFactory;
    protected $fillable = [
        'MaKH',
        'HoTen',
        'NgaySinh',
        'GioiTinh',
        'DiaChi',
        'SoDT',
        
    ];
}
