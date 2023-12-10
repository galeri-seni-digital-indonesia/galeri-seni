<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class MerchController extends Controller
{
    public function show($id)
    {

        $client = new Client(); //GuzzleHttp\Client
        $url = "https://galseid.wip.la/api/v1/records/merchs/{$id}";


        $response = $client->request('GET', $url, [
            'verify'  => false,
        ]);

        $merch = json_decode($response->getBody(), true);
        
        $title = isset($merch['nama']) ? $merch['nama'] : 'merch Detail';

        return view('pages.merchDetail', compact('merch'))->with('title', $title);
    }
}
