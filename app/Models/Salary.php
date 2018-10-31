<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    protected $table = 'salarys';
    protected $fillable = [
        'EmployeeId', 'Name', 'Work', 'Basic', 'Bonus', 'Month'
    ];


}