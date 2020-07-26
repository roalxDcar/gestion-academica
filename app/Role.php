<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table      = 'svp_roles';
    protected $primaryKey = 'role_id';

    public function grants()
    {
        return $this->belongsToMany(Grant::class, 'svp_role_grants', 'role_id', 'grant_id');
    }

    public function rol()
    {
        return $this->hasMany(RoleGrant::class, 'role_id');
    }
}
