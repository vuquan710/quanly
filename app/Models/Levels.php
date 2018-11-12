<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Levels extends Model
{
    protected $table = 'trinhdo';
    public $timestamps = false;
    protected $fillable = [
        'TenTD'
    ];

    public static function getListLevel($limit, $page, $key)
    {
        if ($key) {
            return self::where('TenTD', 'like', '%' . $key . '%')
                ->paginate($limit, ['*'], 'page', $page);
        }
        return self::paginate($limit, ['*'], 'page', $page);
    }
}
