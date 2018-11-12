<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $table = 'khoahoc';
    public $timestamps = false;
    protected $fillable = [
        'Khoahoc'
    ];

    public static function  getListCourse($limit, $page, $key)
    {
        if ($key) {
            return self::where('Khoahoc', 'like', '%' . $key . '%')
                ->paginate($limit, ['*'], 'page', $page);
        }
        return self::paginate($limit, ['*'], 'page', $page);
    }
}
