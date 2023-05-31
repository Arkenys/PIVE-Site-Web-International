<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin;
use App\Editeur;
use phpCAS;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    public function login(){
        phpCAS::client(CAS_VERSION_2_0,'auth.univ-lorraine.fr',443,'');
        phpCAS::setNoCasServerValidation();
        if(!phpCAS::checkAuthentication()){
            phpCAS::forceAuthentication();
        }
        $isPolytech=false;
        $file = Storage::disk('local')->get('authorizated-uid-list');
        $uids=explode("\n",$file);
        foreach($uids as $uid){
            if($uid==phpCAS::getAttribute("uid")) $isPolytech=true;
        }
        session()->put('isPolytech',$isPolytech);
        session()->put('uid',phpCAS::getAttribute("uid"));
        session()->put('prenom',phpCAS::getAttribute("givenname"));
        session()->put('nom',phpCAS::getAttribute("sn"));
        session()->put('mail',phpCAS::getAttribute("mail"));
        $admins=Admin::all();
        $editeurs=Editeur::all();
        $isAdmin=false;
        foreach($admins as $admin){
            if($admin->uid==session("uid")) $isAdmin=true;
        }
        $isEditeur=false;
        foreach($editeurs as $editeur){
            if($editeur->uid==session("uid")) $isEditeur=true;
        }
        session()->put('isAdmin',$isAdmin);
        session()->put('isEditeur',$isEditeur);
        return redirect('/');
    }

    public function logout(){
        session()->forget(['uid','nom','prenom','mail','isPolytech','isAdmin','isEditeur']);
        session()->save();
        phpCAS::client(CAS_VERSION_2_0,'auth.univ-lorraine.fr',443,'');
        phpCAS::logoutWithRedirectService("https://international.polytech-nancy.univ-lorraine.fr");
    }
}
