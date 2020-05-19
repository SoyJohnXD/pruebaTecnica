<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categories;

class categoriesController extends Controller
{
    public function index(){
        return categories::all();
    }

    public function show($id){

        return categories::find($id);
    }

    public function store(Request $request)
    {
        return categories::create($request->all());
    }

    public function update(Request $request, $id) {
        $categories = categories::findOrFail($id);
        $categories->update($request->all());
        return $categories;
    }

    
    public function delete(Request $request,$id)
    {
        $categories = categories::findOrFail($id);
        $categories->delete();
        return 204;
    }

}
