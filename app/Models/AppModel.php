<?php
/**
 * Created by PhpStorm.
 * User: Lenh Ho Xung
 * Date: 10/7/2017
 * Time: 6:42 PM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AppModel extends Authenticatable
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    const STATUS_FALSE = 0;
    const STATUS_TRUE = 1;
    public static $status = [
        self::STATUS_FALSE => 'No',
        self::STATUS_TRUE => 'Yes'
    ];

    public static function findByIdActive($id, $field = null)
    {
        $item = self::where('id', '=', $id)->first();

        if (!$item) {
            return null;
        }

        if (!$field) {
            return $item;
        }

        return @$item->{$field};

    }

    public static function findByAlias($alias, $field = null)
    {
        $item = self::where('alias', '=', $alias)->first();

        if (!$item) {
            return null;
        }

        if (!$field) {
            return $item;
        }

        return @$item->{$field};

    }

}