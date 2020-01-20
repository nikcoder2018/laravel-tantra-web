<?php

namespace App\Http\Controllers;

use App\GameLogin;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class GameLoginController extends Controller
{
    public function index(Request $request)
    {
        $user_id = $request->user_id;
        $user_pass = $request->user_pass;
        
        $user = User::where([['userid', $user_id],['activated', false]])->first();
        if(!empty($user)){
            if(Hash::check($user_pass, $user->password)){
                    $find =  GameLogin::where('userid','=',$user->userid)->exists();
                    if($find){
                        $login = GameLogin::where('userid','=',$user->userid)->first();
                        $login->userid = $user->userid;
                        $login->password = $user_pass;
                        $login->save();
                    }else{
                        $login = new GameLogin;
                        $login->userid = $user->userid;
                        $login->password = $user_pass;
                        $login->save();
                    }
            }
            $gamelogin = GameLogin::where('userid','=',$user->userid)->first();
            $userPass = $gamelogin->password;
            $ID     =   $user->userid;
            $userKey =   $user->userkey;
            $email  =   $user->email;


            $block_status = User::select(DB::raw('DATEDIFF(day, getdate(), blocked_enddate) as count, blocked_enddate'))
                        ->where('userid', $user_id)
                        ->first();

            if($block_status->count >= 0 ){
                $result = -100;
                echo $result.'<br>';
            }else{
                $update = User::where('userid', $user_id)->update(['blocked' => 0]);
                $result = 0;
                //echo $result.'<br>';
            }
            
        }else{
            $result = -99;
            //echo $result.'<br>';  
        }
        if (($result == -100) || ($result == -99))
        {	
            echo '2';
            die();
        }
        
        $user_pass_ok = strtolower($userPass);
        //echo $user_pass_ok."<br>";
        $user_pass_ok = "@".substr($user_pass_ok,0,1)."^".substr($user_pass_ok,1);
        //echo $user_pass_ok."<br>";
        $user_pass_ok = md5($user_pass_ok);
        //echo $user_pass_ok."<br>";

        if ($user_pass != $user_pass_ok)
        {
            echo '1';
            die();
        }

        echo '0';

        $AccDir = "D:\\TANTRA-ETERNAL FILES\\SERVER FILES\\OFFLINE SERVER\\DBSRV\\account";

        $password = strtolower(md5(strtolower($userPass)));
    
        $ini=substr($user_id,0,1);
		if (preg_match("@^[a-zA-Z]$@i",$ini)) {
			$initial=strtoupper($ini);
		}
		else	
		{
			$initial="etc";
        }

		$f=@fopen($AccDir."\\".$initial."\\".$user_id.".tad","r") or die("Error");
        $acc = @fread($f,7124);
        $demopass=substr($acc,52,32);
        $acc = str_replace($demopass,$password,$acc); 
		$f2=@fopen($AccDir."\\".$initial."\\".$user_id.".tad","w");
		@fwrite($f2,$acc) or die("Error");
		@fclose($f);
    }

    public function result(){
        return view('gamelogin.result');
    }
}
