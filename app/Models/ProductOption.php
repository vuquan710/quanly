<?php
/**
 * Created by PhpStorm.
 * User: Lenh Ho Xung
 * Date: 10/23/2017
 * Time: 8:34 PM
 */

namespace App\Models;


class ProductOption extends AppModel
{
    protected $table = 'p_product_options';
    protected $fillable = [
        'p_product_id', 'display_type', 'display_name', 'value'
    ];
}