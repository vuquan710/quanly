<?php

/**
 * Created by PhpStorm.
 * User: Lenh Ho Xung
 * Date: 04/02/2017
 * Time: 4:49 CH
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminAppController extends Controller
{
    const LIMIT_DEFAULT_1 = 10;
    const LIMIT_DEFAULT_2 = 25;
    const LIMIT_DEFAULT_3 = 50;
    public static $listOptionPaginate = [
        self::LIMIT_DEFAULT_1,
        self::LIMIT_DEFAULT_2,
        self::LIMIT_DEFAULT_3
    ];

    const PAGE_DEFAULT = 1;

}