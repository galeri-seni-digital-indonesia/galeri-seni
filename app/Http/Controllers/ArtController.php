<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Art;

class ArtController extends Controller
{
    public function index()
    {
        $data = Art::all();

        return response()->json($data);
    }
}
