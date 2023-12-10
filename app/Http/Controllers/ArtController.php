<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ArtController extends Controller
{
    public function show($id)
    {

        $client = new Client(); //GuzzleHttp\Client
        $url = "https://galseid.wip.la/api/v1/records/arts/{$id}";


        $response = $client->request('GET', $url, [
            'verify'  => false,
        ]);

        $art = json_decode($response->getBody(), true);
        
        $title = isset($art['nama']) ? $art['nama'] : 'Art Detail';

        return view('pages.artDetail', compact('art'))->with('title', $title);
    }
}
