<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class shopController extends Controller
{
    public function index() {
        // $data = Http::get("https://epood.ta19heinsoo.itmajakas.ee/api/hajus");
        // return $data;
        // $realData = array();

        return Inertia::render('Store');
    }
}
