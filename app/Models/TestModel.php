<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TestModel extends Model
{
    protected $table = 'kiemtra';
    public $timestamps = false;
    protected $fillable = [
       'MaLop','ThoiGian','NgayKT'
    ];

    public static function  getListClassTest($limit, $page, $key)
    {
        if ($key) {
            return self::where('NgayKT', '<>','NULL')
                ->join('lophoc','lophoc.id','=','kiemtra.MaLop')
                ->where(function ($query) use ($key) {
                    $query->where('lophoc.TenLop', 'like', '%' . $key . '%');
                })
                ->paginate($limit, ['*'], 'page', $page);
        }
        return self::where('NgayKT', '<>','NULL')
            ->join('lophoc','lophoc.id','=','kiemtra.MaLop')
            ->select('kiemtra.*', 'lophoc.TenLop')
            ->paginate($limit, ['*'], 'page', $page);
    }
}
