<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Users_tbl;

class PublicController extends Controller
{
    public function index(Request $request){
        if (
            $request->session()->exists('user_id') &&
            $request->session()->exists('user_name') &&
            $request->session()->exists('user_type')
        ){
            return redirect('land');
        }
        return view('login');
    }
    public function login(Request $request){
        $username = $request->input('username');
        $password = $request->input('password');
        
        $user = Users_tbl::where('user_name', $username)
        ->where('account_status',1)
        ->first();

        if($user != null){
            if (Hash::check($password, $user->password)) {
                $request->session()->put('user_id', $user->user_id);
                $request->session()->put('user_name', $user->user_name);
                $request->session()->put('user_type', $user->user_type);
                
                return redirect()->route('land');
            }
            else{
                return redirect()->route('login_page')->with('error','Wrong Credentials!');
            }
        }
        else{
            return redirect()->route('login_page')->with('error','Wrong Credentials!');
        }
    }

    public function logout(Request $request){
        $request->session()->forget('user_id');
        $request->session()->forget('user_name');
        $request->session()->forget('user_type');

        return redirect()->route('login_page');
    }

    public function land(Request $request){
        $user_type = $request->session()->get('user_type');
        //not-existing
        if($user_type === null){
            return redirect()->route('login_page');
        }
        //root_admin
        if($user_type === 0){
            return redirect()->route('root_index');
        }
        //admin
        elseif($user_type === 1){

        }
        else{
            return "else";
        }
    }

    public function own_profile(){
        $userid = session()->get('user_id');
        $user = Users_tbl::where('user_id', $userid)
        ->where('account_status',1)
        ->first();

        return view('public_layouts.profile')->with('user',$user);
    }

    public function update_profile(Request $request){
        $userid = session()->get('user_id');
        $user = Users_tbl::where('user_id', $userid)
        ->update([
            'user_name' => $request->input('user_name'),
            'first_name' => $request->input('first_name'),
            'middle_name' => $request->input('middle_name'),
            'last_name' => $request->input('last_name'),
            'gender' => $request->input('gender'),
            'email' => $request->input('email')
        ]);
        $request->session()->forget('user_name');
        $request->session()->put('user_name', $request->input('user_name'));
        return redirect()->route('land');
    }

    public function change_password(Request $request){

        $userid = session()->get('user_id');
        $user = Users_tbl::select('password')
        ->where('user_id', $userid)
        ->first();

        if (Hash::check($request->input('old_password'), $user->password)) {            
            $user = Users_tbl::where('user_id', $userid)
            ->update([
                'password' => Hash::make($request->new_password)
            ]);
            return redirect()->route('own_profile')->with('success','Password Changed!');
        }
        else{
            return redirect()->route('own_profile')->with('error','Wrong Password!');
        }
    }
}
