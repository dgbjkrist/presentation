<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Spatie\Permission\Models\Permission as PermissionSpatie;

class Permission extends PermissionSpatie{


	public static function defaultPermissions()
{
    return [
        'view_users',
        'add_users',
        'edit_users',
        'delete_users',

        'view_roles',
        'add_roles',
        'edit_roles',
        'delete_roles',

    ];
}


 }
