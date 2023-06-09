<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// importo il mio Model
use App\Models\Train;

class MainController extends Controller
{
    public function index () {
        $trains = Train::where('orario_partenza', '>=', date('Y-m-d'))->get();
        return view('welcome', compact('trains'));
}
}
