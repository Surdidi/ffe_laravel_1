<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControlPage extends Controller{
  public function connexion(){
    return view('pages/connexion');
  }

  public static function verif_id(Request $request){
    $user = $request->input('login');
    $mdp = $request->input('psw');
    $req = DB::select('select count(*) as nb  from utilisateurs where mail_utilisateur = ? and mdp_utilisateur = ?',[$user,$mdp]);
    $test = (int) $req[0]->nb ;
    if($test == 1){
      session(['mail' => $user]);
      session(['mdp' => $mdp]);
      return redirect('/acceuil');
    }
    else(){
      return redirect('/');
    }
  }

  public static function accueil(){
    return view('pages/accueil');
  }


}
