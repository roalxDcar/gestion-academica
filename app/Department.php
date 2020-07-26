<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'svp_departments';
    protected $primaryKey = 'department_id';

}
