<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BoxController;
use Illuminate\Support\Facades\DB;


class donat extends box
{
    public $boxinf;

public function __construct($boxinf)
{
    $this->token = $boxinf->token;

}


public function get(){

    $events_db = DB::table("user_options_events")->select('amount','type')->where("token", $this->token)->where("status", 1)->get();


    foreach($events_db as $val)
    {

        $events[$val->amount] = $val->type;
        $amount[]=$val->amount;
    }


    $new_donat = DB::table("donats")->select()->where("user_id_token", $this->token)->where("status", 0)->whereIn("amount",$amount)->limit(1)->get();

    if (!empty($new_donat[0])) {

        $donat_id = $new_donat[0];
        $donat_type = $events[$donat_id->amount];

        return $this->type= $donat_type;
    }
    return 0;
}

public function blind()
{

    $events_db = DB::table("user_options_events")->select('amount','type')->where("token", $this->token)->where("status", 1)->get();


        foreach($events_db as $val)
    {

        $events[$val->amount] = $val->type;
        $amount[]=$val->amount;
    }


    $new_donat = DB::table("donats")->select()->where("user_id_token", $this->token)->where("status", 0)->whereIn("amount",$amount)->limit(1)->get();


    if (!empty($new_donat[0])) {

        $donat_id = $new_donat[0];

       $donat_off = DB::table("donats")->where("id", $donat_id->id)->update(['status' => 1]);

        return $this->gasim = 0;
    }
    return $this->gasim = 1;
}


}
