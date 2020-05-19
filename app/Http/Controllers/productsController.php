<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;


class productsController extends Controller
{
    public function index(){
        return products::all();
    }

    public function show($id){

        return products::find($id);
    }

    public function store(Request $request)
    {
        return products::create($request->all());
    }

    public function update(Request $request, $id) {
        $products = products::findOrFail($id);
        $products->update($request->all());
        return $products;
    }

    
    public function delete(Request $request,$id)
    {
        $products = products::findOrFail($id);
        $products->delete();
        return 204;
    }
}
