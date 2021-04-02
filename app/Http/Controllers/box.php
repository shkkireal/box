<?php

namespace App\Http\Controllers;
use App\Http\Controllers\BoxController;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\donat;
class box extends BoxController
{
protected $boxArg;
protected $sireal;
public function __construct($boxArg)
{
    $token = self::BoxValidate($boxArg->sireal);

    if($token !=null) {

        $this->token = $token;
        $this->sireal = $boxArg->sireal;
        $this->gasim = $boxArg->gasim;

    }
    return null;
}
    public function BoxValidate($sir){

        
        $HasBoxNumber = DB::table("users")->select("token")->where("sireal", $sir)->first();
        if (isset($HasBoxNumber->token)){
        return  $HasBoxNumber->token;
            }
        return  null;
    }

public function action() {


 if ($this->gasim)
 {


     $this->donat = new donat($this);

     return ($this->donat->blind());

    }
    $this->donat = new donat($this);
   return $this->donat->get();


}

}
