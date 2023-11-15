<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;

class RolesController extends Controller
{
    /**
      * Display a listing of the resource
      *
      *@return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:role-list|role-create|role-edit|role-delete', ['only' => ['index','store']]);
        $this->middleware('permission:role-create', ['only' => ['create','store']]);
        $this->middleware('permission:role-edit',   ['only' =>  ['edit','update']]);
        $this->middleware('permission:role-delete',['only'=>['destroy']]);
    }

    /**
      * Display a listing of the resource
      *
      *@return \Illuminate\Http\Response
     */
    public function index(Request $request){
        $roles = Role::orderBy('id','DESC')->paginate(5);
        return view('roles.index',compact('roles'))
                ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
      * 
      *
      *@return \Illuminate\Http\Response
     */
    public function create(){
        $permission = Permission::get();
        return view('roles.created',compact('permission'));
    }

    /**
      * 
      *@param \Illuminate\Http\Request $request
      *@return \Illuminate\Http\Response
     */
    public function store(Request $request){

        $this->validate($request, [
            'name' => 'required|unique:roles,name',
            'permissions' => 'required',
            ]);

            $roles = Role::create(['name'=>$request->input('name')]);
            $roles->syncPermissions($request->input('permission'));

            return redirect()->route('roles.index')
                            ->with('success','Rol creado correctamente');

     }

     /**
      * 
      *@param int $id
      *@return \Illuminate\Http\Response
     */
    public function show($id){
        $role = Role::find($id);
        $rolePermissions = Permission::join("role_has_permissions","role_has_permissions.permission_id","=","permissions.id")
        ->whre("role_has_permissions.role_id",$id)
        ->get();

        return view('roles.show',compact('rol','rolePermissions'));
    }

    /**
      *
      *@param int $id
      *@return \Illuminate\Http\Response
     */
    public function edit($id){
        $role = Role::find($id);
        $permission = Permission::get();
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$id)
                ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')->all()
                ->all();

        return view('roles.edit',compact('rol','permission','rolePermissions'));
    }

    /**
      *@param \illuminate\Http\Request $request
      *@param int $ids  
      *@return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $this->validate($request, [
            'name' => 'required',
            'permissions' => 'required',
            ]);

        $role = Role::find($id);
        $role->name = $request->input('name');
        $role->save();

        return redirect()->route('roles.index')
                        ->with('success','Rol actualizado correctamente');
    }

    /**
      *
      *@param int $id
      *@return \Illuminate\Http\Response
     */
    public function destroy($id){
        DB::table("roles")->where('id',$id)->delete();
        return redirect()->route('roles.index')
                        ->with('success','Rol eliminado correctamente');
    }

}
