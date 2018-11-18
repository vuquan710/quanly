<?php

namespace App\Http\Controllers\Admin;

use App\Models\Students;
use Illuminate\Http\Request;
use App\Models\TutorModel;
use Illuminate\Support\Facades\DB;

class TutoringStudentController extends AdminAppController
{
    protected $dirView = 'AdminView.Tutoring.';
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
        $data = TutorModel::getListTutor($limit,$page,$key);
        $breadcrumbs = "Danh Sách Học Phụ Đạo";
        return view($this->dirView . 'index')->with(['data' => $data, 'breadcrumbs' => $breadcrumbs,'dataSearch' => $key]);
    }

    public function create (Request $request) {
        $student = DB::table('hocvien')->get();
        if ($request->isMethod('POST')) {
            $student = new TutorModel();
            $student->fill($request->input());
            try {
                $student->save();
                return redirect()->route('admin.student.tutoring.index');
            } catch (Exception $e) {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
            }
        }
        return view($this->dirView . 'create')->with(['student'=>$student]);
    }

    public function update (Request $request){
        $student = DB::table('hocvien')->get();
        $data = TutorModel::where('id', $request->id)->get();
        if ($request->isMethod('POST')) {
            $student =  TutorModel::find($request->id);
            $student->update($request->input());
            try {
                $student->save();
                return redirect()->route('admin.student.tutoring.index');
            } catch (Exception $e) {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
            }
        }
        return view($this->dirView . 'update')->with(['data'=>$data,'student'=>$student]);
    }

    public function delete (Request $request) {
        if ($request->isMethod('POST')) {
            $student =  TutorModel::find($request->id);
            try {
                $student->delete();
                return redirect()->route('admin.student.tutoring.index');
            } catch (Exception $e) {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
            }
        }
    }
}
