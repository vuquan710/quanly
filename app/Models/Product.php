<?php
/**
 * Created by PhpStorm.
 * User: Lenh Ho Xung
 * Date: 10/15/2017
 * Time: 9:38 PM
 */

namespace App\Models;


class Product extends AppModel
{
    protected $table = 'p_products';
    protected $fillable = [
        'alias', 'p_category_id', 'p_vendor_id', 'product_code', 'name', 'is_new', 'is_sale', 'is_show',
        'price', 'price_sale', 'unit', 'quantity', 'short_description', 'description'
    ];
}