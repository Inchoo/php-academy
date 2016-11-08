<?php

namespace App\Http\Controllers;

use App\Attendee;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function index()
    {
        //list all entries

        $attendees = Attendee::all();
        //$attendees = Attendee::where('name', 'Ivan Weiler')->get();

        return view('admin.index', [
            'prijave' => $attendees
        ]);

    }

}