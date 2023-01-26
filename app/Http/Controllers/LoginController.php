<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    //
    public function index(){
        return view('login');
    }

    public function authenticate(Request $request)
    {   
        // dd($request->all());
        $credentials = Admin::where('nama','=',$request->input('nama'))->first();
        // dd($credentials);
        if($credentials){
            // $x = Hash::check($request->input('password'),$credentials->password);
            if($request->input('password')==$credentials->password){
                if($credentials->level=='superadmin'){
                    session()->put('level','superadmin');
                    session()->put('login','True');
                    session()->put('nama',$credentials->nama);
                    // dd (Session)
                    return redirect('/master/foto');    
                }else{
                    session()->put('level','user');
                    session()->put('login','True');
                    session()->put('nama',$credentials->nama);
                    return redirect('/master/foto');   
                }
            }else{
                // return back()->withErrors('loginError', 'Login failed!!');
                return redirect('/login');
            }
            }else{
            session()->flash('failed','Login failed!!');
            return redirect('/login');
            // return back()->withErrors('loginError', 'Login failed!!');
        }
    }

    public function logout()
    {
        Session::flush();
        return redirect('/login');
    }
    public function registrasi()
    {
        // dd($data);
        return view('/registrasi');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData=$request->validate([
            'nama'=>'required|max:255'
            
        ]);
        if($request->password == $request->check_password){
            $validatedData['password'] = $request->password;
        }
        $validatedData['level'] = 'user';
        // dd($validatedData);
        Admin::create($validatedData);
        return redirect('/login');
        //
    }

}