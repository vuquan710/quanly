<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'nhanvien';
    protected $fillable = [
        'TenNV', 'Ngaysinh', 'Quequan', 'Bangcap', 'Capbac'
    ];
    public $timestamps = false;

    public static function listEmployee ($limit,$page) {
        return self::orderBy('id','desc')->paginate($limit, ['*'], 'page', $page);
    }

    public static function getOneEmployee ($id) {
        return self::where('id',$id)->get();
    }
}
