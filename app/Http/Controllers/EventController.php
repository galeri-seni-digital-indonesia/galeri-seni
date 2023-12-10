<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class EventController extends Controller
{
    public function show($id)
    {

        $client = new Client(); //GuzzleHttp\Client
        $url = "https://galseid.wip.la/api/v1/records/events/{$id}";


        $response = $client->request('GET', $url, [
            'verify'  => false,
        ]);

        $event = json_decode($response->getBody(), true);
        
        $title = isset($event['nama']) ? $event['nama'] : 'Event Detail';
        

        return view('pages.eventDetail', compact('event'))->with('title', $title);
    }
}
