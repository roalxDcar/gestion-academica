<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grant extends Model
{
    protected $table = 'svp_grants';
    protected $primaryKey = 'grant_id';
}
