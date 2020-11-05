<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToolsController extends Controller
{
    // Send data json to APP_URL
    public function sendRequest ($data)
    {
        $url  = env('APP_URL');
        //create a new cURL resource
        $ch = curl_init($url);
        //setup request to send json via POST
        $payload = json_encode($data);
        //attach encoded JSON string to the POST fields
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        //set the content type to application/json
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        //return response instead of outputting
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Max Execute
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        //execute the POST request
        $raw = curl_exec($ch);
        //close cURL resource
        curl_close($ch);
        // get data Return Response
        $json = json_decode($raw, true);
        // dd($json);
        
        if ($json!==null) {
            $json['success'] = true;
            return $json;
        } else {
            $out['success'] = false;
            $out['message'] = 'Connection Lost!!';
            return $out;
        }
    }
}
