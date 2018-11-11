<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $table = 'hocvien';
    public $timestamps = false;
    protected $fillable = [
        'MaTD', 'TenHV', 'Ngaysinh', 'TenPH', 'Sdt', 'Fb',
        'Malop', 'Cahoc', 'MaKH', 'Ghichu',
        'NgayDKM', 'NgayDKT', 'NgayPD', 'NgayKT','NgayNghi','Trangthai'
    ];

    public static function  getNewCourses($limit, $page, $key)
    {
        if ($key) {
            return self::where('NgayDKM', '<>','NULL')
                ->join('lophoc','lophoc.id','=','hocvien.Malop')
                ->join('khoahoc','khoahoc.id','=','hocvien.MaKH')
                ->where('TenHV', 'like', '%' . $key . '%')
                ->orWhere('lophoc.TenLop', 'like', '%' . $key . '%')
                ->orWhere('khoahoc.KhoaHoc', 'like', '%' . $key . '%')
                ->paginate($limit, ['*'], 'page', $page);
        }
        return self::where('NgayDKM', '<>','NULL')
            ->join('lophoc','lophoc.id','=','hocvien.Malop')
            ->join('trinhdo','trinhdo.id','=','hocvien.MaTD')
            ->join('khoahoc','khoahoc.id','=','hocvien.MaKH')
            ->orderBy('hocvien.id','desc')
            ->select('hocvien.*', 'lophoc.TenLop','khoahoc.Khoahoc','trinhdo.TenTD')
            ->paginate($limit, ['*'], 'page', $page);
    }

    public static function getOneNewCourse($id)
    {
        return self::where('id', $id)->get();
    }

    public static function getNextCourses($limit, $page, $key)
    {
        if ($key) {
              return self::where('NgayDKT', '<>','NULL')
                ->join('lophoc','lophoc.id','=','hocvien.Malop')
                ->join('khoahoc','khoahoc.id','=','hocvien.MaKH')
                ->where('TenHV', 'like', '%' . $key . '%')
                ->orWhere('lophoc.TenLop', 'like', '%' . $key . '%')
                ->orWhere('khoahoc.KhoaHoc', 'like', '%' . $key . '%')
                ->paginate($limit, ['*'], 'page', $page);
        }
        return self::where('NgayDKT', '<>','NULL')
            ->join('lophoc','lophoc.id','=','hocvien.Malop')
            ->join('trinhdo','trinhdo.id','=','hocvien.MaTD')
            ->join('khoahoc','khoahoc.id','=','hocvien.MaKH')
            ->orderBy('hocvien.id','desc')
            ->select('hocvien.*', 'lophoc.TenLop','khoahoc.Khoahoc','trinhdo.TenTD')
            ->paginate($limit, ['*'], 'page', $page);
    
    }


    public static function getClassTest($limit, $page, $key)
    {
        if ($key) {
            return self::where('Type', 3)
                ->Where('ClassName', 'like', '%' . $key . '%')
                ->paginate($limit, ['*'], 'page', $page);
        }
        return self::where('Type', 3)->orderBy('id','desc')->paginate($limit, ['*'], 'page', $page);
    }

    public static function getWaitingStudent($limit, $page, $key)
    {
        if ($key) {
            return self::where('Type', 4)
                ->where('Name', 'like', '%' . $key . '%')
                ->orWhere('ClassName', 'like', '%' . $key . '%')
                ->orWhere('Course', 'like', '%' . $key . '%')
                ->paginate($limit, ['*'], 'page', $page);
        }
        return self::where('Type', 4)->orderBy('id','desc')->paginate($limit, ['*'], 'page', $page);
    }

    public static function getTutoring($limit, $page, $key)
    {
        if ($key) {
            return self::where('Type', 5)
                ->where('Name', 'like', '%' . $key . '%')
                ->orWhere('ClassName', 'like', '%' . $key . '%')
                ->orWhere('Course', 'like', '%' . $key . '%')

                ->paginate($limit, ['*'], 'page', $page);
        }
        return self::where('Type', 5)->orderBy('id','desc')->paginate($limit, ['*'], 'page', $page);
    }

    public static function getOffStudent($limit, $page, $key)
    {
        if ($key) {
            return self::where('Type', 6)
                ->where('Name', 'like', '%' . $key . '%')
                ->orWhere('ClassName', 'like', '%' . $key . '%')
                ->orWhere('Course', 'like', '%' . $key . '%')
                ->paginate($limit, ['*'], 'page', $page);
        }
        return self::where('Type', 6)->orderBy('id','desc')->paginate($limit, ['*'], 'page', $page);
    }
}
