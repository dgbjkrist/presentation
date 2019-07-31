<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use App\Models\Permission;

class ACLSpatieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ask for db migration refresh, default is no
        if ($this->command->confirm('Souhaiterez vous rafraichir la migration avant de faire seeding , Ceci effacera toutes les annciennes donnees ?')) {
            // Call the php artisan migrate:refresh
            $this->command->call('migrate:refresh');
            $this->command->warn("Donnees supprimees, Votre base de donnees est vide!!.");
        }

        $this->command->info('Bienvenue a ibrahim khalil boilerplate.');

        $this->command->info('Création des permissions par defaut en cours.');
        // Seed the default permissions
        $permissions = Permission::defaultPermissions();

        foreach ($permissions as $perms) {
            Permission::firstOrCreate(['name' => $perms,'display_name'=>str_slug($perms, $separator = '_')]);
        }


        $this->command->info('Permissions par defaut ajoutées.');

        $this->command->info('Création du role "admin" en cours.');

        $role = Role::firstOrCreate([
            'name' => 'admin',
            'guard_name'=>'web',
            'display_name' => 'Admin'
        ]);

        $role->syncPermissions(Permission::all());

        $this->command->info('admin herite de toutes les autorisations.');

        $this->createUser($role);

        $this->command->info('Role "admin" ajouté avec succes.');

        $this->command->warn('Bon courage pour le code :)');
    }

    private function createUser($role)
    {
        $user = factory(User::class)->create();
        $user->assignRole($role->name);

        if($role->name == 'admin')
        {
            $this->command->info('Voici les détails du compte admin pour vous connecter:');
            $this->command->warn($user->email);
            $this->command->warn('Le mot de passe est "secret"');
        }
    }
}
