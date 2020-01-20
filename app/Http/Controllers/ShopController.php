<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;

class ShopController extends Controller
{
    public function index(){
        $data = array(
            'page_title'    =>  'ITEM SHOP',
            'page_name'     =>  'SHOP',
            'store_items'   =>  Shop::all()
        );
        return view('pages.shop')->with($data);
    }
}
