<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Ranking;
use Auth;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function downloads(){
        $data = array(
            'page_title'    =>  'Download Links',
            'page_name'     =>  'Downloads',
        );
        return view('pages.downloads')->with($data);
    }
}
