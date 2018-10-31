<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Employee;

class SalaryController extends AdminAppController
{
    protected $dirView = 'AdminView.Salary.';

    /**
     * @param Request $request
     * @return $this
     */
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
        $data = Employee::listEmployee($limit,$page);
        $breadcrumbs = "Thông Tin Lương Nhân Viên";
        return view($this->dirView . 'index')->with(['data' => $data, 'breadcrumbs' => $breadcrumbs]);
    }

    public function create (Request $request) {
        if ($request->isMethod('POST')) {
            $empployee = new Employee();
            $empployee->fill($request->input());
            try {
                $empployee->save();
                return redirect()->route('admin.employee.index');
            } catch (Exception $e) {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
            }
        }
        $employee = Employee::all();
        return view($this->dirView . 'create',['employee' => $employee]);
    }
}
