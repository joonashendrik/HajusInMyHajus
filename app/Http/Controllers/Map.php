<?php

namespace App\Http\Controllers;

use App\Models\Marker;
use Illuminate\Http\Request;
use Inertia\Inertia;

class Map extends Controller
{
    public function index(){
        $data = Marker::all();
        return Inertia::render('Map', ['data' => $data]);
    }


    public function store(Request $request){
        // return $request;
        Marker::create([
            'name' => $request->name,
            'description' => $request->description,
            'latitude' => $request->lat,
            'longitude' => $request->lng,
        ]);
        return redirect()->back();
    }

    public function delete(Request $request, $id){
        $marker = Marker::find($id);
        $marker->delete();
        return redirect()->back();
    }
}
