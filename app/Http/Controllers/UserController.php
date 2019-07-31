<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use App\Traits\Authorizable;
use Illuminate\Http\Request;

class UserController extends Controller
{

    use Authorizable;

    public function index()
    {

        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('users.create', compact('roles'));
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'nom' => 'bail|required|min:2',
            'prenoms' => 'bail|required|min:2',
            'contact_1' => 'required|min:11|max:12',
            'contact_2' => 'nullable|min:11|max:12',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6',
            'roles' => 'required|min:1',

        ]);

        $user = new User;
        $user->nom = $request->nom;
        $user->prenoms = $request->prenoms;
        $user->contact_1 = $request->contact_1;
        $user->contact_2 = $request->contact_2;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        if ($user->save()) {
            $this->syncPermissions($request, $user);
            flash('Le compte a été créé.')->success();
        } else {

            flash()->error('Impossible de créer ce compte.');
        }

        return redirect()->route('users.index');

    }

    public function show(User $user)
    {

        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        $roles = Role::all();
        $permissions = Permission::all('name', 'id');
        return view('users.edit', compact('user', 'roles', 'permissions'));
    }

    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'nom' => 'required|min:2',
            'prenoms' => 'required|min:2',
            'contact_1' => 'required|min:11|max:12',
            'contact_2' => 'nullable|min:11|max:12',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'roles' => 'required|min:1',
        ]);

        $user->nom = $request->nom;
        $user->prenoms = $request->prenoms;
        $user->contact_1 = $request->contact_1;
        $user->contact_2 = $request->contact_2;
        $user->email = $request->email;

        $user->fill($request->except('roles', 'permissions'));

        $this->syncPermissions($request, $user);

        $user->save();

        flash()->success('Le compte a été modifié.');

        return redirect()->route('users.index');
    }

    public function trashed()
    {

        $users = User::onlyTrashed()->get();
        return view('users.trashed', compact('users'));

    }

    public function destroy(User $user)
    {
        $user->delete();
        flash('Utilisateur ' . $user->prenoms . ' a été desactivé')->warning();
        return redirect()->back();
    }

    public function restore($id)
    {

        $user = User::withTrashed()
            ->where('id', $id)
            ->restore();
        flash('Utilisateur a été reactivé')->info();
        return redirect()->route('users.index');

    }

    private function syncPermissions(Request $request, $user)
    {
        // Get the submitted roles
        $roles = $request->get('roles', []);
        $permissions = $request->get('permissions', []);

        // Get the roles
        $roles = Role::find($roles);

        // check for current role changes
        if (!$user->hasAllRoles($roles)) {
            // reset all direct permissions for user
            $user->permissions()->sync([]);
        } else {
            // handle permissions
            $user->syncPermissions($permissions);
        }

        $user->syncRoles($roles);

        return $user;
    }
}
