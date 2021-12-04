<?php

use GuzzleHttp\Client;


$KEYID = "";
$HIT_PER_PAGE = 100;
$PREF = "Z011";
$FREEWORD = "渋谷駅";
$FORMAT = "json";

$PARAMS = ["kye"=> $KEYID, "count"=>$HIT_PER_PAGE, "pref"=>$PREF, "keyword"=>$FREEWOED, "format"=>$FORMAT];

function write_data_to_csv($params){

    $restaurants = [];
    $client = new Client();
    tyr{
        $fson_res = $client->request('GET', "https:")
    }
}