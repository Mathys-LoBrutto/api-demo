<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class ProduitController extends Controller
{
    function liste(){
    return response()->json(Produit::all());
    }

    function detail($id){
        return response()->json(Produit::find($id));
    }
}
