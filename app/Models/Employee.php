<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    protected $fillable = [
        'Stt', 'Name', 'Country', 'School', 'Rank', 'Bod'
    ];

    public static function listEmployee ($limit,$page) {
        return self::paginate($limit, ['*'], 'page', $page);
    }

    public static function getOneEmployee ($id) {
        return self::where('id',$id)->get();
    }
}
