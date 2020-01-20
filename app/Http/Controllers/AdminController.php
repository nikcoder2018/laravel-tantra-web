<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Softon\SweetAlert\Facades\SWAL;
use App\Events;
use App\User;
use App\Prizes;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data   =   array(
            'page_title'    =>  'Dashboard',
        );
        return view('admin.dashboard')->with($data);
    }
    public function accounts()
    {
        $data   = array(
            'page_title'    =>  'Accounts',
            'accounts'        =>  User::all(),
        );

        return view('admin.accounts')->with($data);
    }
    public function admins()
    {

    }
    public function events()
    {
        $data   = array(
            'page_title'    =>  'Events',
            'events'        =>  Events::all(),
        );

        return view('admin.events')->with($data);
    }

    public function eventscreate(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'startdate' => 'date|nullable',
            'starttime' => 'nullable',
            'endsdate'  =>  'date|nullable',
            'endstime'  =>  'nullable',
            'type'      =>  'required',
            'event_cover' => 'image|nullable|max:1999'
        ]);

        //Handle file upload
        if($request->hasFile('event_cover')){
            //Get File Name with the extension
            $filenameWithExt = $request->file('event_cover')->getClientOriginalName();

            //Get Just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get Just ext
            $extension = $request->file('coveevent_coverr_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('event_cover')->storeAs('public/event_cover', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        //create post

        $event = new Events;
        $event->title = $request->input('title');
        $event->description = $request->input('description');
        $event->photo = $fileNameToStore;
        $event->gm = Auth::user()->id;
        $event->startdate = $request->input('startdate');
        $event->starttime = $request->input('starttime');
        $event->endsdate = $request->input('endsdate');
        $event->endstime = $request->input('endstime');
        $event->type    =   $request->input('type');
        $event->save();

        $response = array(
            'type' => 'success',
            'title' => 'Saved!',
            'msg' => 'Events created successfully',
        );
        
        Return response()->json(array('response'=> $response), 200);
    }

    public function eventsprizes($id){
        $data   = array(
            'page_title'    =>  'Event Prizes',
            'events'        =>  Events::all(),
            'prizes'        =>  Prizes::find($id),
        );
        // Check for correct user
        if(auth()->user()->id <> Events::find($id)->gm){
            return redirect('/admin-events')->with('error', 'Unauthorized Page');
        }

        return view('admin.events-prizes')->with($data);
    }
}
