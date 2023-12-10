<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ArtistController extends Controller
{
    public function show($id)
    {

        $client = new Client(); //GuzzleHttp\Client
        $url = "https://galseid.wip.la/api/v1/records/artists/{$id}";


        $response = $client->request('GET', $url, [
            'verify'  => false,
        ]);

        $artist = json_decode($response->getBody(), true);
        
        $title = isset($artist['nama']) ? $artist['nama'] : 'artist Detail';

        return view('pages.artistDetail', compact('artist'))->with('title', $title);
    }
}
