<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    public function index(){
        $roles = role::all();

        return view('admin.role.index', compact('roles'));
    }
    // create store edit update delete
    public function create(){
        return view('admin.role.create');
    }
    public function store(Request $request){
        $roles = Role::create([
            'role_name' => $request->role_name
        ]);

        return redirect('/roles');
    }
    public function edit($id){
        $roles = Role::find($id);
        return view('admin.role.edit', compact(['roles']));
    }
    public function update(Request $request, $id){
        $roles = Role::find($id);
        $roles->update([
            'role_name' => $request->role_name
        ]);

        return redirect('/roles');
    }
    public function delete($id){
        $roles = Role::find($id);
        $roles->delete();

        return redirect('/roles');
    }
}
