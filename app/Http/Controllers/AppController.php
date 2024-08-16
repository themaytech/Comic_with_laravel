<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class AppController extends Controller
{
    public function index()
    {
         try {
            $response = Http::withHeaders([
                'AccessKey' => 'lJj6qb3369HGefFPtjMXodefbTPXbu3ffmT0luDrIA5Taldw5R03xMpjwi219l7BaDE', // Replace 'YOUR_API_KEY_HERE' with your actual API key
                'Accept' => 'application/json',
            ])->get(env('API_BASE_URL') . '/comics?page=1&itemPerPage=14&created=desc') ;// Replace 'YOUR_API_ENDPOINT_HERE' with your API endpoint
            
            $responseData = $response->json();
            if ($response->successful()) {
                $data = $response->json();
                return view('app', ['apiData' => $data]);
            } else {
                $data = null;
                return view('app', ['apiData' => $data]);
            }
        } catch (\Exception $e) {
            Log::error('Failed to fetch data from the API: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to fetch data from the APIIIII'], 500);
        }
    }
    function page($page){
        try {
            $response = Http::withHeaders([
                'AccessKey' => 'lJj6qb3369HGefFPtjMXodefbTPXbu3ffmT0luDrIA5Taldw5R03xMpjwi219l7BaDE', // Replace 'YOUR_API_KEY_HERE' with your actual API key
                'Accept' => 'application/json',
            ])->get(env('API_BASE_URL') . '/comics?page='.$page.'&itemPerPage=14&created=desc') ;// Replace 'YOUR_API_ENDPOINT_HERE' with your API endpoint
            
            $responseData = $response->json();
            if ($response->successful()) {
                $data = $response->json();
                return view('app', ['apiData' => $data]);
            } else {
                $data = null;
                return view('app', ['apiData' => $data]);
            }
        } catch (\Exception $e) {
            Log::error('Failed to fetch data from the API: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to fetch data from the APIIIII'], 500);
        }
    }
    public function detail($post_id){
        try{
            $response = Http::withHeaders([
                'AccessKey' => 'lJj6qb3369HGefFPtjMXodefbTPXbu3ffmT0luDrIA5Taldw5R03xMpjwi219l7BaDE', // Replace 'YOUR_API_KEY_HERE' with your actual API key
                'Accept' => 'application/json',
            ])->get(env('API_BASE_URL'). '/comic/'. $post_id);
            
            if ($response->successful()) {
                $responseEsp = Http::withHeaders([
                    'AccessKey' => 'lJj6qb3369HGefFPtjMXodefbTPXbu3ffmT0luDrIA5Taldw5R03xMpjwi219l7BaDE', // Replace 'YOUR_API_KEY_HERE' with your actual API key
                    'Accept' => 'application/json',
                ])->get(env('API_BASE_URL').'/episode?tid='.$post_id);
                $dataEsp = $responseEsp->json();
                $data = $response->json();
                return view('detailComic', 
                ['DataEsp' => $dataEsp,
                 'Data' => $data
                ]);
            } else {
                $data = null;
                return view('detailComic', ['Data' => $data]);
            }
        }catch(\Exception $e){
            return response()->json(['error' => 'Failed to fetch data from the APIIIII'], 500);
        }
    }
    public function read($post_id,$ep){
        try {
            $response = Http::withHeaders([
                'AccessKey' => 'lJj6qb3369HGefFPtjMXodefbTPXbu3ffmT0luDrIA5Taldw5R03xMpjwi219l7BaDE', // Replace 'YOUR_API_KEY_HERE' with your actual API key
                'Accept' => 'application/json',
            ])->get(env('API_BASE_URL') . '/comic/'.$post_id.'?ep='.$ep) ;// Replace 'YOUR_API_ENDPOINT_HERE' with your API endpoint
            
            $responseData = $response->json();
            if ($response->successful()) {
                $data = $response->json();
                $cleanedJsonString = trim($data['images'], '"');

                // Decode the JSON string
                $decodedArray = json_decode($data['images'], true);
                $SeconddecodedArray = json_decode($decodedArray, true);
                return view('read', ['readData' => $SeconddecodedArray]);
            } else {
                $data = null;
                return view('read', ['readData' => $data]);
            }
        } catch (\Exception $e) {
            Log::error('Failed to fetch data from the API: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to fetch data from the APIIIII'], 500);
        }
    }

    public function movie($name = null)
    {
        if ($name == "") {
            return view('movie')->with('currentRoute', Route::currentRouteName());
        }
        if ($name == "categories") {
            return view('categories')->with('currentRoute', Route::currentRouteName());
        } else {
            return view('movie_with_name')->with('x', $name)->with('currentRoute', Route::currentRouteName());
        }
    }

    public function categories()
    {
        return view('categories')->with('currentRoute', Route::currentRouteName());
    }

    public function movie_with_cat($name = null)
    {
        if ($name == "") {
            return view('categories')->with('currentRoute', Route::currentRouteName());
        } else {
            return view('movie_with_cat')->with('x', $name)->with('currentRoute', Route::currentRouteName());
        }
    }
    public function index_product()
    {
        $products = products::all();
        return view('products', ['products' => $products]);
    }
   
}