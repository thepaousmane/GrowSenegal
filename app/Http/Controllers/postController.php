<?php
namespace App\Http\Controllers;
class postController extends Controller
{
    public function connexion(){
        return view('connexion');
    }

    public function postConnexion(){
        return view('postConnexion');
    }
}
?>