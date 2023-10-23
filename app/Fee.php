<?php

namespace App;

class Fee
{   

    public function GetTotalfee() :int
    {
        // create curl resource
        $ch = curl_init();
        // set url
        curl_setopt($ch, CURLOPT_URL, "http://www.randomnumberapi.com/api/v1.0/random");
        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // $output contains the output string
        $response  = curl_exec($ch);
        // close curl resource to free up system resources
        return $response[1];
    }   
}
