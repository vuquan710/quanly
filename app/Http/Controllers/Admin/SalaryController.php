<?php

namespace App\Http\Controllers\Admin;

use App\Models\Salary;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;
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
        $data = DB::table('salarys')
            ->leftJoin('employees', 'employees.id', '=', 'salarys.EmployeeId')
            ->select('salarys.id','employees.Name','salarys.Work','salarys.Basic','salarys.Bonus','salarys.Month')
            ->orderBy('employees.Name')
            ->paginate($limit, ['*'], 'page', $page)
        ;
        $breadcrumbs = "Thông Tin Lương Nhân Viên";
        return view($this->dirView . 'index')->with(['data' => $data, 'breadcrumbs' => $breadcrumbs]);
    }

    public function create (Request $request) {
        if ($request->isMethod('POST')) {
            $salary = new Salary();
            $salary->fill($request->input());
            try {
                $salary->save();
                return redirect()->route('admin.salary.index');
            } catch (Exception $e) {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
            }
        }
        $employee = Employee::all();
        return view($this->dirView . 'create',['employee' => $employee]);
    }

    public function update (Request $request){
        $data = DB::table('salarys')
            ->leftJoin('employees', 'employees.id', '=', 'salarys.EmployeeId')
            ->select('salarys.id','employees.Name','salarys.Work','salarys.Basic','salarys.Bonus','salarys.Month')
            ->where('salarys.id','=',$request->id)
            ->get();
        ;
        if ($request->isMethod('POST')) {
            $salary =  Salary::find($request->id);
            $salary->update($request->input());
            try {
                $salary->save();
                return redirect()->route('admin.salary.index');
            } catch (Exception $e) {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
            }
        }
        return view($this->dirView . 'update')->with(['data'=>$data]);
    }

    public function delete (Request $request) {
        if ($request->isMethod('POST')) {
            $salary =  Salary::find($request->id);
            try {
                $salary->delete();
                return redirect()->route('admin.salary.index');
            } catch (Exception $e) {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
            }
        }
    }
}
