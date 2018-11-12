<?php

namespace App\Http\Controllers\Admin;

use App\Models\Levels;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LevelController extends AdminAppController
{
    protected $dirView = 'AdminView.Level.';

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
        $data = Levels::getListLevel($limit, $page, $key);
        $breadcrumbs = "Danh Sách Học Viên Đăng Ký Mới";
        session(['key' => $data]);
        return view($this->dirView . 'index')->with(['data' => $data, 'breadcrumbs' => $breadcrumbs, 'dataSearch' => $key]);
    }

    public function create(Request $request)
    {
        if ($request->isMethod('POST')) {
            $student = new Levels();
            $student->fill($request->input());
            try {
                $student->save();
                return redirect()->route('admin.level.index');
            } catch (Exception $e) {
                echo 'Caught exception: ', $e->getMessage(), "\n";
            }
        }
        return view($this->dirView . 'create');
    }

    public function update(Request $request)
    {
        $data = Levels::where('id',$request->id)->get();
        if ($request->isMethod('POST')) {
            $student = Levels::where('id',$request->id)->first();
            $student->update($request->input());
            try {
                $student->save();
                return redirect()->route('admin.level.index');
            } catch (Exception $e) {
                echo 'Caught exception: ', $e->getMessage(), "\n";
            }
        }
        return view($this->dirView . 'update')->with(['data'=>$data]);
    }

    public function delete(Request $request)
    {
        if ($request->isMethod('POST')) {
            $student = Levels::find($request->id);
            try {
                $student->delete();
                return redirect()->route('admin.level.index');
            } catch (Exception $e) {
                echo 'Caught exception: ', $e->getMessage(), "\n";
            }
        }
    }
}
