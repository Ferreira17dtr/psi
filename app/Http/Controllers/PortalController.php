<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    //
    public function index () {
    	return view ('entrada');
    } 

route::get('/' 'App\Http\Controllers\PortalController@index');

}

