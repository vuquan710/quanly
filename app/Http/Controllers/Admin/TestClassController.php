<?php

namespace App\Http\Controllers\Admin;

use App\Models\Students;
use Illuminate\Http\Request;

class TestClassController extends AdminAppController
{
    protected $dirView = 'AdminView.RegNext.';

    public function index(Request $request)
    {
        $limit = self::LIMIT_DEFAULT_1;
        $page = self::PAGE_DEFAULT;
        if (!empty($request['limit'])) {
            $limit = $request['limit'];
        }
        if (!empty($request['page'])) {
            $page = $request['page'];
        }
        $data = Students::getClassTest($limit,$page);
        $breadcrumbs = "Danh Sách Các Lớp Kiểm Tra Định Kỳ";
        return view($this->dirView . 'index')->with(['data' => $data, 'breadcrumbs' => $breadcrumbs]);
    }
}
