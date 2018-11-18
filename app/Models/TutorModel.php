<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TutorModel extends Model
{
    protected $table = 'phudao';
    public $timestamps = false;
    protected $fillable = [
        'MaHV','ThoiGian','NgayPD'
    ];

    public static function  getListTutor($limit, $page, $key)
    {
        if ($key) {
            return self::where('NgayPD', '<>','NULL')
                ->join('hocvien','hocvien.id','=','phudao.MaHV')
                ->where(function ($query) use ($key) {
                    $query->where('hocvien.TenHV', 'like', '%' . $key . '%');
                })
                ->paginate($limit, ['*'], 'page', $page);
        }
        return self::where('NgayPD', '<>','NULL')
            ->join('hocvien','hocvien.id','=','phudao.MaHV')
            ->join('lophoc','lophoc.id','=','hocvien.Malop')
            ->join('trinhdo','trinhdo.id','=','hocvien.MaTD')
            ->join('khoahoc','khoahoc.id','=','hocvien.MaKH')
            ->select('hocvien.*','lophoc.TenLop','khoahoc.Khoahoc','trinhdo.TenTD','phudao.*')
            ->paginate($limit, ['*'], 'page', $page);
    }
}
