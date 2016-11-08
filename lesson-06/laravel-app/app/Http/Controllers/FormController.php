<?php

namespace App\Http\Controllers;

use App\Attendee;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function form()
    {
        return view('form');
    }

    public function submit(Request $request)
    {
        /**
         * Validate request
         * https://laravel.com/docs/5.3/validation#available-validation-rules
         */
        $this->validate($request, [
            //'dummy'   => 'required',
            'name'      => 'required|max:30',
            'email'     => 'required|email|max:50',
            'academy_major' => 'required|max:50',
            'academy_year'  => 'required|digits_between:1,5',
            'motivation'    => 'required',
            'prior_languages'   => 'array|in:C,C#,Javascript,Brainfuck'
        ]);

        //var_dump($request->all());

        /**
         * Upload file to /storage/app/examples/
         *
         * @todo: code doesn't check if file with same name already exists
         */
        if ($request->hasFile('code_example')) {
            $path = $request->code_example->store('examples');
            //var_dump($path);
        }

        /**
         * Save to DB
         */
        $attendee = new Attendee();
        $attendee->name          = $request->name;
        $attendee->email         = $request->email;
        $attendee->academy_major = $request->academy_major;
        $attendee->academy_year  = $request->academy_year;
        $attendee->motivation    = $request->motivation;

        //$attendee->prior_languages = $request->prior_languages; // array error

        //much shorter version
        //$attendee = new Attendee($request->all());

        $attendee->save();

        //redirect to thankyou
        return redirect('thankyou');
    }

    public function thankyou()
    {
        return view('thankyou');
    }

}