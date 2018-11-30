<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControlPage extends Controller{

public function test(){
  return view('pages/test');
}

}
