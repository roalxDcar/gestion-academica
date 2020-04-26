<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'svp_roles';
    protected $primarykey = 'role_id';
}
