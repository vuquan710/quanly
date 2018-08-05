<?php

namespace App\Http\Controllers\Admin;

use App\Models\Students;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OffStudentController extends AdminAppController
{
    protected $dirView = 'AdminView.OffStudent.';
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
        $data = Students::getOffStudent($limit,$page);
        $breadcrumbs = "Danh Sách Học Viên Nghỉ";
        return view($this->dirView . 'index')->with(['data' => $data, 'breadcrumbs' => $breadcrumbs]);
    }
}
