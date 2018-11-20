<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ClassModel;
use function PHPSTORM_META\elementType;

class ClassController extends AdminAppController
{

    protected $dirView = 'AdminView.Class.';

    public function index () {
        $limit = self::LIMIT_DEFAULT_1;
        $page = self::PAGE_DEFAULT;
        if (!empty($request['limit'])) {
            $limit = $request['limit'];
        }
        if (!empty($request['page'])) {
            $page = $request['page'];
        }
        $key = empty($request->search) ? "" : $request->search;
        $data = ClassModel::getListClass($limit, $page, $key);
        $breadcrumbs = "Danh Sách Học Viên Đăng Ký Mới";
        session(['key' => $data]);
        return view($this->dirView . 'index')->with(['data' => $data, 'breadcrumbs' => $breadcrumbs, 'dataSearch' => $key]);
    }

    public function create(Request $request)
    {
        if ($request->isMethod('POST')) {
            $findStudent = ClassModel::where('TenLop','=',$request->TenLop)->first();
            $error = 'Tên Lớp Đã Tồn Tại, Vui Lòng Nhập Tên Khác';
            if ($findStudent) {
                return view($this->dirView . 'create')->with(['error'=>$error]);
            }else {
                $student = new ClassModel();
                $student->fill($request->input());
                try {
                    $student->save();
                    return redirect()->route('admin.class.index');
                } catch (Exception $e) {
                    echo 'Caught exception: ', $e->getMessage(), "\n";
                }
            }
        }
        return view($this->dirView . 'create');
    }

    public function update(Request $request)
    {
        $data = ClassModel::where('id',$request->id)->get();
        if ($request->isMethod('POST')) {
            $student = ClassModel::where('id',$request->id)->first();
            $student->update($request->input());
            try {
                $student->save();
                return redirect()->route('admin.class.index');
            } catch (Exception $e) {
                echo 'Caught exception: ', $e->getMessage(), "\n";
            }
        }
        return view($this->dirView . 'update')->with(['data'=>$data]);
    }

    public function delete(Request $request)
    {
        if ($request->isMethod('POST')) {
            $student = ClassModel::find($request->id);
            try {
                $student->delete();
                return redirect()->route('admin.class.index');
            } catch (Exception $e) {
                echo 'Caught exception: ', $e->getMessage(), "\n";
            }
        }
    }

}
