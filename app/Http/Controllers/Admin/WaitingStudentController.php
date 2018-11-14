<?php

namespace App\Http\Controllers\Admin;

use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $key = empty($request->search) ? "" : $request->search;
        $data = Students::getWaitingStudent($limit,$page,$key);
        $breadcrumbs = "Danh Sách Chờ Xếp Lớp";
        return view($this->dirView . 'index')->with(['data' => $data, 'breadcrumbs' => $breadcrumbs,'dataSearch' => $key]);
    }

    public function update (Request $request){
        $data = Students::getOneNewCourse($request->id);
        $class = DB::table('lophoc')->get();
        $level = DB::table('trinhdo')->get();
        $lecture = DB::table('khoahoc')->get();
        if ($request->isMethod('POST')) {
            $student = Students::where('id',$request->id)->first();
            $student->update($request->input());
            try {
                $student->save();
                return redirect()->route('admin.student.waiting.index');
            } catch (Exception $e) {
                echo 'Caught exception: ', $e->getMessage(), "\n";
            }
        }
        return view($this->dirView . 'update')->with(['class'=>$class,'level'=>$level,'lecture'=>$lecture,'data'=>$data]);
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
