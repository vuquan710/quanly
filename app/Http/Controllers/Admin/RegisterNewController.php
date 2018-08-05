<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Students;

class RegisterNewController extends AdminAppController
{
    protected $dirView = 'AdminView.RegNew.';

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
        $data = Students::getNewCourses($limit,$page);
        $breadcrumbs = "Danh Sách Học Viên Đăng Ký Mới";
        return view($this->dirView . 'index')->with(['data' => $data, 'breadcrumbs' => $breadcrumbs]);
    }
}
