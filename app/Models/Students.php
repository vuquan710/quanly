<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $table = 'students';
    protected $fillable = [
        'Stt', 'Name', 'Parent', 'Course', 'Phone', 'Facebook',
        'ClassName', 'Lecture', 'CourseNew', 'Bod',
        'Status', 'Type', 'RegDateNew', 'RegDate',
    ];

    public static function listStudent($limit, $page)
    {
        return self::where('Type', '<>', 3)->paginate($limit, ['*'], 'page', $page);
    }

    public static function getNewCourses($limit, $page, $key = null)
    {
        return self::where('Type', 1)
            ->where('Name', 'like', '%' . $key . '%')
            ->orWhere('ClassName', 'like', '%' . $key . '%')
            ->orWhere('Course', 'like', '%' . $key . '%')
            ->paginate($limit, ['*'], 'page', $page);
    }

    public static function getOneNewCourse($id)
    {
        return self::where('id', $id)->get();
    }

    public static function getNextCourses($limit, $page, $key = null)
    {
        return self::where('Type', 2)
            ->where('Name', 'like', '%' . $key . '%')
            ->orWhere('ClassName', 'like', '%' . $key . '%')
            ->orWhere('Course', 'like', '%' . $key . '%')
            ->paginate($limit, ['*'], 'page', $page);
    }

    public static function getClassTest($limit, $page)
    {
        return self::where('Type', 3)->paginate($limit, ['*'], 'page', $page);
    }

    public static function getWaitingStudent($limit, $page)
    {
        return self::where('Type', 4)->paginate($limit, ['*'], 'page', $page);
    }

    public static function getTutoring($limit, $page)
    {
        return self::where('Type', 5)->paginate($limit, ['*'], 'page', $page);
    }

    public static function getOffStudent($limit, $page)
    {
        return self::where('Type', 6)->paginate($limit, ['*'], 'page', $page);
    }
}
