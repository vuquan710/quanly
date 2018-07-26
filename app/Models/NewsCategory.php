<?php
/**
 * Created by PhpStorm.
 * User: Lenh Ho Xung
 * Date: 10/7/2017
 * Time: 6:42 PM
 */

namespace App\Models;

class NewsCategory extends AppModel
{
    protected $table = 'new_categories';
    protected $fillable = [
        'position', 'name', 'meta_title', 'meta_keywords', 'meta_description', 'description',
        'title', 'content', 'is_show'
    ];

    public static function getListNewCategory()
    {
        $newCat = self::get()->toArray();
        return $newCat;
    }
}