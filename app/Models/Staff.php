<?php
/**
 * Created by PhpStorm.
 * User: Lenh Ho Xung
 * Date: 10/14/2017
 * Time: 10:43 PM
 */

namespace App\Models;

class Staff extends AppModel
{
    protected $table = 'staffs';
    protected $fillable = [
        'username', 'password', 'email', 'first_name', 'last_name', 'full_name', 'author_type', 'remember_token', 'reset_password_token', 'reset_password_token_expired'
    ];

    const AUTHOR_ADMIN = 1;
    const AUTHOR_EMPLOYEE = 2;
}