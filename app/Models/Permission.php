<?php

namespace App\Models;

use Laratrust\Models\LaratrustPermission;

class Permission extends LaratrustPermission
{
    public $guarded = [];

    protected $fillabale = [
        'name',
        'display_name',
        'description',
    ];
}
