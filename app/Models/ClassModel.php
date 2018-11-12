<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
    protected $table = 'lophoc';
    public $timestamps = false;
    protected $fillable = [
        'TenLop'
    ];

    public static function  getListClass($limit, $page, $key)
    {
        if ($key) {
            return self::where('TenLop', 'like', '%' . $key . '%')
                ->paginate($limit, ['*'], 'page', $page);
        }
        return self::where('id','<>',1)->paginate($limit, ['*'], 'page', $page);
    }
}
