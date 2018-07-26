<?php
/**
 * Created by PhpStorm.
 * User: Lenh Ho Xung
 * Date: 10/29/2017
 * Time: 3:33 PM
 */

namespace App\Http\Controllers\Admin;


use App\Models\ProductCategory;
use Illuminate\Http\Request;

class CategoriesController extends AdminAppController
{
    protected $dirView = 'AdminView.Categories.';

    public function index(Request $request)
    {
        return view($this->dirView . 'index');
    }

    public function create(Request $request)
    {
        $listCategories = ProductCategory::getListCategories();
        dd($listCategories);
        return view($this->dirView . 'create')
            ->with('listCategories', $this->buildTreeCategories($listCategories));
    }

    private function buildTreeCategories($lists)
    {
        if (empty($lists)) {
            return [];
        }
        $newList = [];
        foreach ($lists as $list) {
            if (empty($list['parent_id'])) {
                $list['text_name'] = $list['name'];
                $newList[$list['id']] = $list;
            } else {

            }
//            switch ($list['level']) {
//                case 1:
//                    $list['text_name'] = $list['name'];
//                    break;
//                case 2:
//                    $list['text_name'] = '|____' . $list['name'];
//                    break;
//                case 3:
//                    $list['text_name'] = '|____|____' . $list['name'];
//                    break;
//            }
//            $newList[$list['id']] = $list;
        }
        return $newList;

    }
}