<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// importo il mio Model
use App\Models\Train;

class MainController extends Controller
{
    public function index () {
        $trains= Train::all();
        return view('welcome', compact($trains));
}
}
