<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'svp_roles';
    protected $primaryKey = 'role_id';
   //    protected $fillable = ['description'];
}
