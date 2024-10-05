<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Updaterecord extends Controller
{
    public static function update(Request $request) {
    $updated = DB::table("users")
 ->where("id", $request['id'])/** To identify column to edit */
 ->update([
        "fname"=> $request ['fname'],
        "lname"=> $request ['lname'],
        "email"=> $request ['email']

 ]);
 
 if($updated) {
    return [
        "success" => true,
        "message" => "Sucessfully updated"
    ];
}
else {
    return[
        "success" => false,
         "message" => "Fail to update"
    ];
}
}
}