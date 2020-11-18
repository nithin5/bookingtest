<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**create form */
    public function create(){
        die('create');
    }
    /**store photo */
    public function store(Request $req){
       die($req);
    }
    /**show the details of photo */
    public function details($id){
         die($id);
    }
}
