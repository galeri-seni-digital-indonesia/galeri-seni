<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ArtController extends Controller
{
    public function show($id)
    {

        $client = new Client(); //GuzzleHttp\Client
        $API_URL = env('API_URL');
        $url = "{$API_URL}arts/{$id}";

        $response = $client->request('GET', $url, [
            'verify'  => false,
        ]);

        $art = json_decode($response->getBody(), true);
        
        $title = isset($art['nama']) ? $art['nama'] : 'Art Detail';

        // Get Artist's Name
        $artistUrl = "{$API_URL}artists/{$art['artistId']}";
        $artistResponse = $client->request('GET', $artistUrl, [
            'verify'  => false,
        ]);
        $artist = json_decode($artistResponse->getBody(), true);
        $art['artistName'] = $artist['nama'];

        return view('pages.artDetail', compact('art'))->with('title', $title);
    }
}
