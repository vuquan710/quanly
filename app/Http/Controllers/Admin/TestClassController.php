<?php

namespace App\Http\Controllers\Admin;

use App\Models\Students;
use App\Models\TestModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestClassController extends AdminAppController
{
    protected $dirView = 'AdminView.ClassTest.';

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
        $data = TestModel::getListClassTest($limit,$page,$key);
        $breadcrumbs = "Danh Sách Các Lớp Kiểm Tra Định Kỳ";
        return view($this->dirView . 'index')->with(['data' => $data, 'breadcrumbs' => $breadcrumbs,'dataSearch' => $key]);
    }

    public function create (Request $request) {
        $class = DB::table('lophoc')->where('id','<>',1)->get();
        if ($request->isMethod('POST')) {
            $student = new TestModel();
            $student->fill($request->input());
            try {
                $student->save();
                return redirect()->route('admin.student.test.index');
            } catch (Exception $e) {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
            }
        }
        return view($this->dirView . 'create')->with(['class'=>$class]);
    }

    public function update (Request $request){
        $class = DB::table('lophoc')->where('id','<>',1)->get();
        $data = TestModel::where('id', $request->id)->get();
        if ($request->isMethod('POST')) {
            $student =  TestModel::find($request->id);
            $student->update($request->input());
            try {
                $student->save();
                return redirect()->route('admin.student.test.index');
            } catch (Exception $e) {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
            }
        }
        return view($this->dirView . 'update')->with(['data'=>$data,'class'=>$class]);
    }

    public function delete (Request $request) {
        if ($request->isMethod('POST')) {
            $student =  TestModel::find($request->id);
            try {
                $student->delete();
                return redirect()->route('admin.student.test.index');
            } catch (Exception $e) {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
            }
        }
    }
}
