<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Item;
use App\GameLogin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Str;
use Mail;
use App\Mail\verifyemail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => 'required|string|email|max:255|unique:account',
            'userid' => 'required|string|max:255|unique:account',
            'password' => 'required|string|min:6|confirmed',
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $userkey = mt_rand(1000000, 9999999);
        $code = sha1(mt_rand().time().mt_rand().$_SERVER['REMOTE_ADDR']);
        $ESActivation = substr($code, 0, 16);

        $user =  User::create([
            'email'     =>  $data['email'],
            'userid'    =>  $data['userid'],
            'password'  =>  Hash::make($data['password']),
            'userkey'   =>  $userkey,
            'firstname' =>  $data['firstname'],
            'initial'        =>  '',
            'lastname'  =>  $data['lastname'],
            'blocked'   =>  0,
            'blocked_enddate' => date_sub(now(),date_interval_create_from_date_string("30 days")),
            'reg_ipaddress' => request()->ip(),
            'date_registered' => date('Y-m-d H:i:s'),
            'activated' =>  0,
            'confirmed' =>  1,
            'activation_code' => $ESActivation, 
            'verify_token'  =>  Str::random(50),
            'profile_picture' => 'noimage.jpg',
            'type'  => User::DEFAULT_TYPE,
        ]); 

        $thisUser = User::findOrFail($user->id);
        $this->sendEmail($thisUser);
        $this->create_tadfile($thisUser->userid, $thisUser->password);
        Item::create(
            [
                'World' =>  0,
                'Account' => $user->userid,
                'ItemIndex' => 8815,
                'ItemCount' => 1,
            ]
            );

            $login = new GameLogin;
            $login->userid = $user->userid;
            $login->password = $thisUser->password;
            $login->save();
        
        return $user;
    }

    public function create_tadfile($userid, $password){
        $dir = env('SERVER_DIRECTORY_URL', '');
        $tad = asset('storage/tad_file/a.tad');
        $pass = strtoupper(md5(trim($password)));
        $initial = substr($userid, 0, 1);
        $userlenght = strlen(trim($userid));
        
        $file = fopen($tad, "r");
        $acc = fread($file, 7124);
        $demoid=substr($acc,0,$userlenght);
        $demopass=substr($acc,52,32);
        $acc = str_replace($demoid,$userid,$acc);
        $acc = str_replace($demopass,$pass,$acc);
        $file2=fopen($dir."\\".$initial."\\".$userid.".tad", "w");
        fwrite($file2,$acc);
        fclose($file);
        
    }
    public function sendEmail($thisUser)
    {
        Mail::to($thisUser)->send(new verifyemail($thisUser));
    }
    
    public function verifyemail()
    {
        return view('email.verifyemail');
    }

    public function sendemaildone($email, $verifytoken){
        $user = User::where(['email' => $email, 'verify_token' => $verifytoken])->first();
        
        if($user){
           User::where(['email' => $email, 'verify_token' => $verifytoken])->update(['activated' => true, 'confirmed' => 1, 'verify_token' => NULL]);
           return view('email.success');
        }else{
           return view('email.fail');
        }
    }
    
}
