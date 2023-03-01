<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Api_controller extends Controller
{
    public function data_np(){
        $np = curl_init();

        curl_setopt_array($np, array(
            CURLOPT_URL => "https://api.themoviedb.org/3/movie/now_playing?api_key=2a3ce74df224424750afb3cf793f1096&language=en-US&page=1",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 300,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                'Accept:application/json'
                ),
            ));

        $response_now_playing = curl_exec($np);
        $err = curl_error($np);

        curl_close($np);
        $data_np = json_decode($response_now_playing);
        return view('now_playing')->with(['now' => $data_np]);
    }

    public function data_popular(){
        $popular = curl_init();

        curl_setopt_array($popular, array(
            CURLOPT_URL => "https://api.themoviedb.org/3/movie/popular?api_key=2a3ce74df224424750afb3cf793f1096&language=en-US&page=1",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 300,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                'Accept:application/json'
                ),
            ));

        $response_popular = curl_exec($popular);
        $err = curl_error($popular);

        curl_close($popular);
        $data_popular = json_decode($response_popular);
        return view('popular')->with(['popular' => $data_popular]);
    }

    public function data_tr(){
        $tr = curl_init();

        curl_setopt_array($tr, array(
            CURLOPT_URL => "https://api.themoviedb.org/3/movie/top_rated?api_key=2a3ce74df224424750afb3cf793f1096&language=en-US&page=1",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 300,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                'Accept:application/json'
                ),
            ));

        $response_tr = curl_exec($tr);
        $err = curl_error($tr);

        curl_close($tr);
        $data_tr = json_decode($response_tr);
        return view('top_rated')->with(['tr' => $data_tr]);
    }

    public function data_uc(){
        $uc = curl_init();

        curl_setopt_array($uc, array(
            CURLOPT_URL => "https://api.themoviedb.org/3/movie/upcoming?api_key=2a3ce74df224424750afb3cf793f1096&language=en-US&page=1",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 300,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                'Accept:application/json'
                ),
            ));

        $response_uc = curl_exec($uc);
        $err = curl_error($uc);

        curl_close($uc);
        $data_uc = json_decode($response_uc);
        return view('up_coming')->with(['uc' => $data_uc]);
    }
}
