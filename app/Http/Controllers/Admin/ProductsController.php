<?php
/**
 * Created by PhpStorm.
 * User: Lenh Ho Xung
 * Date: 10/29/2017
 * Time: 1:37 PM
 */

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;

class ProductsController extends AdminAppController
{
    protected $dirView = 'AdminView.Products.';

    public function index(Request $request)
    {
        return view($this->dirView . 'index');
    }
}