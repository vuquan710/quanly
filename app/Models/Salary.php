<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    protected $table = 'luong';
    protected $fillable = [
       'MaNV', 'LuongCB', 'Thang', 'Thuong', 'Ngaycong', 'LuongTL', 'Trangthai'
    ];
    public $timestamps = false;


}