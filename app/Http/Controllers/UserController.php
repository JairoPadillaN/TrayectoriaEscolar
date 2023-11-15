<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Usuarios;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use League\Csv\Reader;
use Illuminate\Support\Arr;


class UserController extends Controller
{
     /**
      * display alisting of the resource
      *
      *@return \Illuminate\Http\Response
     */
    public function index(Request $request){
        $data = User::orderBy('id','DESC')->paginate(5);
        return view('users.index',compact('data'))
        ->with('i', ($request->input('page', 1) - 1) * 5); 
    }

    /**
      * Show the form creating a new resource
      *
      *@return \Illuminate\Http\Response
     */
    public function create(){
       $roles = Role::pluck('name','name')->all();
       return view('users.create',compact('roles'));
    }

    /**
      * Store a newly created resource in storage
      *
      * @param  \Illuminate\Http\Request  $request  
      *@return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password'=>'required|same:confirm-password',
            'roles'=>'required'
        ]);

        $input = $request->all();
        $input['password']=Hash::make($input['password']);

        $user = User::create($input);
        $user->assignRole($request->input('roles'));

        return redirect()->route('users.index')
                        ->width('success','El usuario a sido creado correctamente');
     }

     /**
      * display the specified resource
      *@param int $id
      *@return \Illuminate\Http\Response
     */
    public function show($id){
        $user = User::find($id);
        return view('users.show',compact('user'));
     }

     /**
      * Show the form for editing the specified resource
      *@param int $id
      *@return \Illuminate\Http\Response
     */
    public function edit($id){
        $user = User::find ($id);
        $roles = Role::pluck('name','name')->all();
        $userRol = $user->roles->pluck('name','name')->all();

        return view('users.edit',compact('user','roles','userRol'));
     }

     /**
      * Update the specified resource in estorage
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  int              $id
      *@return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){

        $this->validate($request,[
            'matricula' => 'required',
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' .$id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        if(!empty($input['password'])){
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));
        }

        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();

        $user->assignRole($request->input('roles'));

        return redirect()->route('users.index')
                        ->with('success','usuario actualizado correctamente');
     }

     /**
      * Remo ve the specified resource form storage
      *@param int $id
      *@return \Illuminate\Http\Response
     */
    public function destroy($id){
        User::find($id)->delete();
        return redirect()->route('users.index')
                        ->with('success','Usuario eliminado correctamente');
     }


     public function importUsers(Request $request)
     {
         $file = $request->file('csv_file');
         $csv = Reader::createFromPath($file->getRealPath());
         $csv->setHeaderOffset(0);
     
         $records = $csv->getRecords();
         foreach ($records as $record) {
             User::create([
                 'name' => $record['name'],
                 'email' => $record['email'],
                 'password' => Hash::make($record['password']),
                 'rol_id' => $record['rol_id'],
             ]);
         }
     
         return back()->with('success', 'Usuarios importados correctamente');
     }

}
