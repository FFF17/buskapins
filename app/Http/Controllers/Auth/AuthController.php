<?php
 
namespace App\Http\Controllers\Auth;
 
use Illuminate\Http\Request;
 
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
 
class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['expect' => 'getLogout']);
    }
 
    public function getLogin()
    {
 
        return view('auth.login');
    }
 
    public function postLogin(Request $r)
    {
        $this->validate($r, [
            'email' => 'required',
            'password' => 'required'
            ]);
        $username = $r->input('email');
        $password = $r->input('password');
        $remember = ($r->input('remember')) ? true : false;
 
        if(Auth::attempt(['email' => $username, 'password' => $password],$remember)) {
            if(Auth::viaRemember()) {
                return redirect('/');
            }
            return redirect('/');
        }
        $message = "The username and password you entered did not match our records.";
        $msg = "Username atau password tidak valid";
        return redirect('login')->with('message', $message)->withInput();
    }
 
    public function getRegister()
    {
        return view('auth.register');
    }
 
    public function postRegister(Request $r)
    {
 
        $message=[
        'required' => 'The attribute field is required.',
        'unique' => 'required|unique:users|email',
        'size' => 'The attribute must be 6 characters'
        ];
 
        $this->validate($r, [
        'name' => 'required',
        'email' => 'required|unique:users|email',
        'password' => 'required|min:6'
            ]);
 
        $username = $r->input('email');
        $password = $r->input('password');
        $remember = ($r->input('remember')) ? true : false;
 
 
 
        $user = new User;
        $user->nama_role ="user";
        $user->name = $r->input('name');
        $user->email = $r->input('email');
        $user->password = bcrypt($r->input('password'));
        $user->save();
 
           
       
        // dd($user);
        // die();
 
        return redirect(url('login'));
    }
 
  public function getRegisteradmin()
    {
        return view('auth.registeradmin');
    }
 
    public function postRegisteradmin(Request $r)
    {
 
        $message=[
        'required' => 'The attribute field is required.',
        'unique' => 'required|unique:users|email',
 
        ];
 
        $this->validate($r, [
        'name' => 'required',
        'email' => 'required|unique:users|email',
   
            ]);
 
        $username = $r->input('email');
        $password = $r->input('password');
        $remember = ($r->input('remember')) ? true : false;
 
 
 
        $admin = new User;
        $admin->nama_role ="admin"; 
        $admin->name = $r->input('name');
        $admin->email = $r->input('email');
        $admin->password = bcrypt($r->input('password'));
        $admin->save();

       
        // dd($user);
        // die();
 
        return redirect(url('/'));
    }
    public function getLogout()
    {
        // Auth::logout();
        // return redirect('login');
        echo "test";
    }
}