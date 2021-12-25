<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class TestController extends Controller
{


    public function create(){


        return view('exam.create');
    }


    public function store(Request $request){

       

        $this->validate($request,[

            'question' => 'required|min:5|max:20',
            'response' => 'required|min:5|max:100'
        ],[

            "question.required" => 'please we can not accept empty data',
            'response.required' => 'please response must not be empty',
            'question.min'=> 'question no less than 5 char',
            'question.max' => 'question no more than 20 char',
            'response.min'=> 'response no less than 5 char',
            'response.max' => 'response no more than 20 char'
        ]);

        /** Sending to database */
        /** Storing in database */
        

        $id = 1;
        return redirect()->route('product.show',['id'=> $id],302)->with('message','quiz created successfuly');

    }
    
}
