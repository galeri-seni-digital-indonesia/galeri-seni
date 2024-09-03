<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class EventController extends Controller
{
    public function show($id)
    {

        $client = new Client(); //GuzzleHttp\Client
        $apiUrl = env('API_URL');
        $url = "{$apiUrl}events/{$id}";


        $response = $client->request('GET', $url, [
            'verify'  => false,
        ]);

        $event = json_decode($response->getBody(), true);
        
        $title = isset($event['nama']) ? $event['nama'] : 'Event Detail';
        

        return view('pages.eventDetail', compact('event'))->with('title', $title);
    }
}
