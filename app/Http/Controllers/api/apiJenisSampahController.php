<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class apiJenisSampahController extends Controller
{
    public function consumeApi()
    {
        try {
            // Define your Bearer token
            $token = '7|Te5FwHsRM23ly7J7NDPSa64c9QkjffB2QOKq2t9b';

            // Make the API request with the Bearer token
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $token,
            ])->get('http://127.0.0.1:8000/api/jenisSampah');

            // Check for a successful response status code (e.g., 200)
            if ($response->status() === 200) {
                $data = $response->json();
                // Process the API response data as needed
                return view('admin.jenisSampah.index', ['apiData' => $data]);
            } else {
                // Handle non-successful response status codes
                return view('admin.jenisSampah.index', ['errorMessage' => 'API request failed']);
            }
        } catch (\Exception $e) {
            // Handle any errors that occur during the API request
            return view('admin.jenisSampah.index', ['errorMessage' => $e->getMessage()]);
        }
    }
}
