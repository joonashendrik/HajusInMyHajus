<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Store;
use Inertia\Inertia;

class ShopController extends Controller
{
    public function index() {

        return Inertia::render('Store');
    }
}
