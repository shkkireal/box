<?php

namespace App\Http\Controllers;

use App\Http\Controllers;



use Illuminate\Http\Request;



class BoxController extends Controller
{

     protected $sireal;
     protected $gasim;
    public function __construct(Request $request)
    {
        $this->sireal = $request->get('sireal');
        $this->gasim  = $request->get('gasim');

    }

    public function box_reqest()
    {
        $this->box = new box($this);

        if($this->box)  $this->box->action();

        $this->answer = new answer($this->box);




        return view('answer_box', ['box_answer'=>$this->answer->get()]);
    }


}
