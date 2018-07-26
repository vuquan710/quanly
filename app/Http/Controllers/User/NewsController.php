<?php
/**
 * Created by PhpStorm.
 * User: Lenh Ho Xung
 * Date: 10/7/2017
 * Time: 6:20 PM
 */

namespace App\Http\Controllers\User;


use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends AppUserController
{
    public function index(Request $request)
    {

    }

    public function show($id)
    {
        $news = News::getDetailNews($id);
        dd($news);

    }

}