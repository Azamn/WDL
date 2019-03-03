<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Workshops;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class WorkshopController extends Controller
{
    
    public function getWorkshop(){
        return view('admin.workshop');
    }
    public function postWorkshop(){
        
    }
}
