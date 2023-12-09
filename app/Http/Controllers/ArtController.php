<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ArtController extends Controller
{
    public function show($id)
    {
        $response = Http::get("http://localhost:8000/api/v1/records/arts/{$id}", ['timeout' => 60]);
        $art = $response->json();

        return view('pages.artDetail', compact('art'));
    }
}
