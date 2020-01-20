<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Ranking;
use App\GameLogin;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $data = array(
            'user' =>  User::find(Auth::user()->id),
            'game'  =>  Ranking::select('CharacterName','Name1','Name2','Name3','Level1','Level2','Level3','GuildName')->where('UserID', Auth::user()->userid)->first()
        );
        return view('pages.profile')->with($data);
    }

    public function setting(){
        $data = array(
            'user' =>  User::find(Auth::user()->id),
            'game'  =>  Ranking::select('CharacterName','Name1','Name2','Name3','Level1','Level2','Level3','GuildName')->where('UserID', Auth::user()->userid)->first()
        );
        return view('pages.setting')->with($data);
    }

    public function updateprofiledone(Request $request){
        $this->validate($request, [
            'firstname' => 'required|max:50',
            'lastname'  => 'required|max:50',
            'middleinitial' => 'max:3',
            'birthdate' => 'nullable|date',
            'address'   => 'nullable|max:255',
            'profile_image' => 'image|nullable|max:1999'
        ]);

        //Handle file upload
        if($request->hasFile('profile_image')){
            //Get File Name with the extension
            $filenameWithExt = $request->file('profile_image')->getClientOriginalName();

            //Get Just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get Just ext
            $extension = $request->file('profile_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('profile_image')->storeAs('public/profile', $fileNameToStore);
        }

        //update profile

        $account = User::find(Auth::user()->id);
        $account->firstname = $request->input('firstname');
        $account->lastname = $request->input('lastname');
        $account->initial = $request->input('middleinitial');
        if(!empty($request->birthdate)){
            $account->birthdate = $request->input('birthdate');
        }
        $account->address = $request->input('address');
        if($request->hasFile('profile_image')){
            $account->profile_picture = $fileNameToStore;
        }
        $account->save();

        return redirect('/setting#item-nav')->with('success', 'Profile Updated');
    }
    public function changepassword(){
        $data = array(
            'user' =>  User::find(Auth::user()->id),
            'game'  =>  Ranking::select('CharacterName','Name1','Name2','Name3','Level1','Level2','Level3','GuildName')->where('UserID', Auth::user()->userid)->first()
        );
        return view('pages.changepass')->with($data);
    }

    public function changepassdone(Request $request){
        $this->validate($request, [
            'oldpassword' => 'required',
            'password'  => 'required|string|min:6|confirmed',
        ]);

        $account = User::find(Auth::user()->id);
        if(Hash::check($request->oldpassword, $account->password) AND !Hash::check($request->password, $account->password)){
            $account->password = Hash::make($request->password);
            $account->save();

            $find =  GameLogin::where('userid','=',$account->userid)->exists();
            if($find){
                $login = GameLogin::where('userid','=',$account->userid)->first();
                $login->userid = $user->userid;
                $login->password = $user_pass;
                $login->save();
            }else{
                $login = new GameLogin;
                $login->userid = $user->userid;
                $login->password = $user_pass;
                $login->save();
            }

            return redirect('/changepassword#item-nav')->with('success', 'Account Password Successfully Changed.');
        }elseif(Hash::check($request->password, $account->password) AND Hash::check($request->oldpassword, $account->password)){
            return redirect('/changepassword#item-nav')->with('error', 'Current Password and New Password are same');
        }elseif(!Hash::check($request->oldpassword, $account->password)){
            return redirect('/changepassword#item-nav')->with('error', 'Current Password is not corrent');
        }

    }
    public function unstuck(){
        $data = array(
            'user' =>  User::find(Auth::user()->id),
            'game'  =>  Ranking::select('CharacterName','Name1','Name2','Name3','Level1','Level2','Level3','GuildName')->where('UserID', Auth::user()->userid)->first()
        );
        return view('pages.unstuck')->with($data);
    }

    public function unstuckdone(Request $request){

        $characters = Ranking::select('Name1', 'Name2', 'Name3')->where('UserID', Auth::user()->userid)->first();
        $server_dir = env('SERVER_DIRECTORY_URL');
        $user_id = Auth::user()->userid;
        $input_char = $request->character;
        $initial = substr($user_id, 0, 1);

        $archive = $server_dir."\\".$initial."\\".$user_id.".TAD";

        $f = @fopen($archive, "r+") or die($archive);

        if($request->character == 0){
            if(empty($characters->Name1)){
                return redirect('/unstuck#item-nav')->with('error', 'Unable to unstuck unknown character.');
            }else{
              @fseek($f, 150, SEEK_SET);
              @fwrite($f,'',1) or die("Error");
              @fseek($f, 160, SEEK_SET);
              @fwrite($f,'',1) or die("Error");
              @fseek($f, 162, SEEK_SET);
              @fwrite($f,'å',1) or die("Error");
              @fclose($f);
                return redirect('/unstuck#item-nav')->with('success', $characters->Name1.' - Teleported to Mandara Zone.');
            }
        }
        if($request->character == 1){
            if(empty($characters->Name2)){
                return redirect('/unstuck#item-nav')->with('error', 'Unable to unstuck unknown character.');
            }else{
                @fseek($f, 1838, SEEK_SET);
                @fwrite($f,'',1) or die("Error");
                @fseek($f, 1848, SEEK_SET);
                @fwrite($f,'÷',1) or die("Error");
                @fseek($f, 1850, SEEK_SET);
                @fwrite($f,'Ú',1) or die("Error");
                @fclose($f);
                return redirect('/unstuck#item-nav')->with('success', $characters->Name2.' - Teleported to Mandara Zone.');
            }
        }
        if($request->character == 2){
            if(empty($characters->Name3)){
                return redirect('/unstuck#item-nav')->with('error', 'Unable to unstuck unknown character.');
            }else{
                @fseek($f, 3526, SEEK_SET);
                @fwrite($f,'',1) or die("Error");
                @fseek($f, 3536, SEEK_SET);
                @fwrite($f,'÷',1) or die("Error");
                @fseek($f, 3538, SEEK_SET);
                @fwrite($f,'Ú',1) or die("Error");
                @fclose($f);
                return redirect('/unstuck#item-nav')->with('success', $characters->Name3.' - Teleported to Mandara Zone.');
            }
        }
    }

}
