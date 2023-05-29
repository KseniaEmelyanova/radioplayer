<?php

include __DIR__.'/settings.php'; 

$Json = file_get_contents($lcapicom ."/servers/?format=json");
$myarray = json_decode($Json, true);

foreach($myarray AS $value) {
    if ($value["id"] == "1") {
        $title1 = $value["title"]; 

    } elseif ($value["id"] == "2") {
        $title2 = $value["title"]; 

    } 

}

$Json = file_get_contents($lcapicom ."/channels/?format=json");
$myarray = json_decode($Json, true);

foreach($myarray AS $value) {
    if ($value["id"] == $myarray[0]["id"] && $value["server"] !== 2) {
        $channel1 = $value["bitrate"]; 
        $asxlink1 = $value["links_html"]["WindowsMedia"]["link"]; 
        $m3ulink1 = $value["links_html"]["Winamp"]["link"]; 
        $ramlink1 = $value["links_html"]["RealPlayer"]["link"]; 
        $weblink1 = $value["links_html"]["WebPlayer"]["link"];
           
    } 
    if ($value["id"] == $myarray[1]["id"] && $value["server"] !== 2) {
        $channel2 = $value["bitrate"];
        $asxlink2 = $value["links_html"]["WindowsMedia"]["link"]; 
        $m3ulink2 = $value["links_html"]["Winamp"]["link"]; 
        $ramlink2 = $value["links_html"]["RealPlayer"]["link"]; 
        $weblink2 = $value["links_html"]["WebPlayer"]["link"]; 
          
    }
    if ($value["server"] !== 1) {
        $channel3 = $value["bitrate"];
        $asxlink3 = $value["links_html"]["WindowsMedia"]["link"]; 
        $m3ulink3 = $value["links_html"]["Winamp"]["link"]; 
        $ramlink3 = $value["links_html"]["RealPlayer"]["link"]; 
        $weblink3 = $value["links_html"]["WebPlayer"]["link"];   
            
    } 
    
}

$Json = file_get_contents($lcapicom ."/history/?format=json");
$myarray = json_decode($Json, true);

foreach($myarray AS $value) {
    if ($value["id"] == $myarray[0]["id"]) {
        $titleonair = $value["metadata"]; 
        $titlepic = $value["img_url"]; 
        $votid = $value["all_music_id"];
           
    } 
     
}

$Json = file_get_contents($lcapicom ."/djs/?format=json");
$myarray = json_decode($Json, true);

foreach($myarray AS $value) {
    if ($value["id"] == $myarray[0]["id"] && $value["server"] !== 2) {
        $onairdj = $value["name"]; 
        $djpic = $value["image"];
        
    } 
      
}

