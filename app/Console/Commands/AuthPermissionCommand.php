<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class AuthPermissionCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
     protected $signature = 'auth:permission {name} {--R|remove}';
    

    public function handle()
    {
        $permissions = $this->generatePermissions();

        // check if its remove
        if( $is_remove = $this->option('remove') ) {
            // remove permission
            if( \App\Models\Permission::where('name', 'LIKE', '%'. $this->getNameArgument())->delete() ) {
                $this->warn('Permissions ' . implode(', ', $permissions) . ' deleted.');
            }  else {
                $this->warn('No permissions for ' . $this->getNameArgument() .' found!');
            }

        } else {
            // create permissions
            foreach ($permissions as $permission) {
                \App\Models\Permission::firstOrCreate(['name' => $permission,'display_name'=>str_slug($permission, $separator = '_') ]);
                
            }

            $this->info('Permissions ' . implode(', ', $permissions) . ' created.');
        }

        // sync role for admin
        if( $role = \App\Models\Role::where('name', 'Admin')->first() ) {
            $role->syncPermissions(\App\Models\Permission::all());
            $this->info('Admin permissions');
        }
    }

    private function generatePermissions()
    {
        $abilities = ['view', 'add', 'edit', 'delete'];
        $name = $this->getNameArgument();

        return array_map(function($val) use ($name) {
            return $val . '_'. $name;
        }, $abilities);
    }
    
    private function getNameArgument()
    {
        return strtolower(str_plural($this->argument('name')));
    }
}