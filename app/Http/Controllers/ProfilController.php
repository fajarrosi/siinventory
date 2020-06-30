<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use DB;
use Hash;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax())
        {
      
        $login = Auth::user();
        $user = DB::table('users as u')
                ->join('departements as dep','dep.id','=','u.departements_id')
                ->join('role_user as ru','ru.user_id','=','u.id')
                ->join('roles as r','r.id','=','ru.role_id')
                ->select('u.name','u.email',DB::raw('dep.name as dep_name'),DB::raw('r.name as role'),'u.id')
                ->where('u.id',$login->id)
                ->get();
                 return datatables()->of($user)
                    
                    ->make(true);
        }
        $isLoggin = Auth::user();
        $data = DB::table('users as u')
                ->join('departements as dep','dep.id','=','u.departements_id')
                ->join('role_user as ru','ru.user_id','=','u.id')
                ->join('roles as r','r.id','=','ru.role_id')
                ->select('u.name','u.email',DB::raw('dep.name as dep_name'),DB::raw('r.name as role'),'u.id')
                ->where('u.id',$isLoggin->id)
                ->get();
        return view('profil.index',compact('data'));
        // dd($user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         if(request()->ajax())
        {
        $data = User::findOrFail($id);
            return response()->json(compact('data'));
        }


    }

    public function change($id)
    {
       if(request()->ajax())
        {
        $data = User::findOrFail($id);
            return response()->json(compact('data'));
        }
    }

    public function passchanged(Request $request)
    {
        $rules = [
           'inputan' => 'required',
        ];
        $msg = [
            'inputan.required' => 'Password tidak boleh kosong',
        ];
        $this->validate($request,$rules,$msg);
        $pass = User::findOrFail($request->change_id);
        $pass->update([
            'password' => hash::make($request->inputan)
        ]);
            return response()->json(['success' => 'password berhasil di update']);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $rules = [
            'name' =>'required|regex:/^[a-zA-Z ]+$/',
            'email' => 'required|email',
        ];
        $msg = [
            'name.required' => 'Nama tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
        ];
        //validator make tidak bisa 
        // $validator = Validator::make($request->all(), $rules, $msg);
        $this->validate($request,$rules,$msg);
        $data = User::findOrFail($request->hidden_id);
        $data->update([
            'name'=>$request->name,
            'email' =>$request->email
        ]);
            return response()->json(['success' => 'profil berhasil di update']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
