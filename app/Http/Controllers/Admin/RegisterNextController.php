<?php

namespace App\Http\Controllers\Admin;

use App\Models\Students;
use Illuminate\Http\Request;

class RegisterNextController extends AdminAppController
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
        $key = empty($request->search) ? "" : $request->search;
        $data = Students::getNextCourses($limit,$page,$key);
        $breadcrumbs = "Danh Sách Học Viên Đăng Ký Tiếp Khóa Học";
        session(['key' => $data]);
        return view($this->dirView . 'index')->with(['data' => $data, 'breadcrumbs' => $breadcrumbs, 'dataSearch' => $key]);
    }
    public function create (Request $request) {
        if ($request->isMethod('POST')) {
            $student = new Students();
            $student->fill($request->input());
            try {
                $student->save();
                return redirect()->route('admin.student.next.index');
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
                return redirect()->route('admin.student.next.index');
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
                return redirect()->route('admin.student.next.index');
            } catch (Exception $e) {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
            }
        }
    }

    public function download (Request $request) {
        $headers = array(
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=doremon.csv",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        );

        $students =  $request->session()->get('key');
        $columns = ['Name'];

        $callback = function() use ($students, $columns)
        {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach($students as $student) {
                fputcsv($file,[$student->Name]);
            }
            fclose($file);
        };
        return Response::stream($callback, 200, $headers);
    }
}
