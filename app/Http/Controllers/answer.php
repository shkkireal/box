<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BoxController;


class answer extends BoxController
{
    public $string;
    public function __construct(box $box_answer)
    {
        $this->type = $box_answer->donat->type;
        $this->impact_time = 1;

    }
 public function get(){

        if($this->gasim == 0){
            $string ="{%1%1%".$this->type."%".$this->impact_time."%0%0}";

            return $string;
        }

        if($this->gasim ==1){
            $string ="{%1%1%0%0%0%0}";
            return $string;
        }


     return $string;

 }


}
