<?php

namespace App\Http\Controllers\Admin;

use App\Models\Students;
use Illuminate\Http\Request;

class WaitingStudentController extends AdminAppController
{
    protected $dirView = 'AdminView.WaitingStudent.';

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
        $data = Students::getWaitingStudent($limit,$page);
        $breadcrumbs = "Danh Sách Chờ Xếp Lớp";
        return view($this->dirView . 'index')->with(['data' => $data, 'breadcrumbs' => $breadcrumbs]);
    }

    public function create (Request $request) {
        if ($request->isMethod('POST')) {
            $student = new Students();
            $student->fill($request->input());
            try {
                $student->save();
                return redirect()->route('admin.student.waiting.index');
            } catch (Exception $e) {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
            }
        }
        return view($this->dirView . 'create');
    }

    public function update (Request $request){
        $data = Students::getOneNewCourse($request->id);
        if ($request->isMethod('POST')) {
            $student =  Students::find($request->id);
            $student->update($request->input());
            try {
                $student->save();
                return redirect()->route('admin.student.waiting.index');
            } catch (Exception $e) {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
            }
        }
        return view($this->dirView . 'update')->with(['data'=>$data]);
    }

    public function delete (Request $request) {
        if ($request->isMethod('POST')) {
            $student =  Students::find($request->id);
            try {
                $student->delete();
                return redirect()->route('admin.student.waiting.index');
            } catch (Exception $e) {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
            }
        }
    }
}
