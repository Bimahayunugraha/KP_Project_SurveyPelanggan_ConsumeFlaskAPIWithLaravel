<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class AnalysisController extends Controller
{
    public function index() {
        return view('dashboard.index');
    }

    public function chartapi () {
        $client = new Client();
        $data = "http://127.0.0.1:5000/api/resources/surveypelanggan/data";
        $response = $client->request('GET', $data , [
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody());
        return view('dashboard.chart', compact('responseBody'));
    }

    public function kmeansapi() {
        $client = new Client();
        $url = "http://127.0.0.1:5000/api/resources/surveypelanggan/kmeansdata";
        $responsekmeans = $client->request('GET', $url , [
            'verify'  => false,
        ]);

        $responseBodyKmeans = json_decode($responsekmeans->getBody());
        return view('dashboard.kmeans', compact('responseBodyKmeans'));
    }

    public function clusteringapi() {
        $client = new Client();
        $url = "http://127.0.0.1:5000/api/resources/surveypelanggan/clusteringdata";
        $responseclustering = $client->request('GET', $url , [
            'verify'  => false,
        ]);

        $responseBodyClustering = json_decode($responseclustering->getBody());
        return view('dashboard.clustering', compact('responseBodyClustering'));
    }
}
