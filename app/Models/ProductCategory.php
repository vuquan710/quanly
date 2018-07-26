<?php
/**
 * Created by PhpStorm.
 * User: Lenh Ho Xung
 * Date: 10/15/2017
 * Time: 9:33 PM
 */

namespace App\Models;


class ProductCategory extends AppModel
{
    const MAX_LEVEL_CHILDREN = 3;

    protected $table = 'p_categories';
    protected $fillable = [
        'name', 'description', '', 'level', 'parent_id'
    ];

    public static function getListCategories()
    {
        $listRoot = self::whereNull('deleted_at')
            ->whereNull('parent_id')
            ->orderBy('level', 'ASC')
            ->get()
            ->toArray();
        if (empty($listRoot)) {
            return $listRoot;
        }
        $lists = [];
        foreach ($listRoot as $root) {
            $lists[] = self::getListChildren($root);
        }

        return $lists;
    }

    protected static function getListChildren($root, $data = [])
    {
        $listChild = self::whereNull('deleted_at')
            ->where('parent_id', $root['id'])
            ->orderBy('level', 'ASC')
            ->get()
            ->toArray();
        if (empty($listChild)) {
            $data[] = $root;
            return $data;
        }
        foreach ($listChild as $child) {
            $data = self::getListChildren($child, $data);
        }
        return $data;
    }

}