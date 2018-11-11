<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use App\Models\Students;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

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
        $key = empty($request->search) ? "" : $request->search;
        $data = Students::getNewCourses($limit, $page, $key);
        $breadcrumbs = "Danh Sách Học Viên Đăng Ký Mới";
        session(['key' => $data]);
        return view($this->dirView . 'index')->with(['data' => $data, 'breadcrumbs' => $breadcrumbs, 'dataSearch' => $key]);
    }

    public function create(Request $request)
    {
        if ($request->isMethod('POST')) {
            $student = new Students();
            $student->fill($request->input());
            try {
                $student->save();
                return redirect()->route('admin.student.new.index');
            } catch (Exception $e) {
                echo 'Caught exception: ', $e->getMessage(), "\n";
            }
        }
        $class = DB::table('lophoc')->get();
        $level = DB::table('trinhdo')->get();
        $lecture = DB::table('khoahoc')->get();
        return view($this->dirView . 'create')->with(['class'=>$class,'level'=>$level,'lecture'=>$lecture]);
    }

    public function update(Request $request)
    {
        $data = Students::getOneNewCourse($request->id);
        $class = DB::table('lophoc')->get();
        $level = DB::table('trinhdo')->get();
        $lecture = DB::table('khoahoc')->get();
        if ($request->isMethod('POST')) {
            $student = Students::where('id',$request->id)->first();
            $student->update($request->input());
            try {
                $student->save();
                return redirect()->route('admin.student.new.index');
            } catch (Exception $e) {
                echo 'Caught exception: ', $e->getMessage(), "\n";
            }
        }
        return view($this->dirView . 'update')->with(['class'=>$class,'level'=>$level,'lecture'=>$lecture,'data'=>$data]);
    }

    public function delete(Request $request)
    {
        if ($request->isMethod('POST')) {
            $student = Students::find($request->id);
            try {
                $student->delete();
                return redirect()->route('admin.student.new.index');
            } catch (Exception $e) {
                echo 'Caught exception: ', $e->getMessage(), "\n";
            }
        }
    }

    public function download(Request $request)
    {
        $headers = array(
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=doremon.csv",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        );

        $students = $request->session()->get('key');
        $columns = ['Số thứ tự','Tên Học Viên', 'Ngày Sinh', 'Tên Phụ Huynh', 'Số Điện Thoại', 'Facebook', 'Khóa Học', 'Lớp Học', 'Ca Học', 'Ngày Đăng Ký'];
        $callback = function () use ($students, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($students as $student) {
                fputcsv($file, [$student->id, $student->Name, $student->Bod, $student->Parent, $student->Phone, $student->Facebook, $student->Course, $student->ClassName, $student->CourseNew, $student->RegDateNew]);
            }
            fclose($file);
        };
        return Response::stream($callback, 200, $headers);
    }
}
