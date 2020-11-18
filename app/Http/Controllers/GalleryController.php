<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    //
    public function index(){
        //$test="ttttttttt";
       // return view('gallery/index',compact('test'));
        return view('gallery/index');
    }
    /**create form */
    public function create(){
        return view('gallery/create');
    }
     /**store gallery */
    public function store(Request $req){
       die($req);
    }
    /**show all photos in gallery*/
    public function show($id){
         die($id);
    }
}
