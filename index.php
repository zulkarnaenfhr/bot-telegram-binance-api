<?php
$content = file_get_contents("php://input");
if($content){
    $token = '2103447613:AAH5D-aZ5LolbrI-u8DG9fYbf2oVhIPYp6U';
    
    $apiLink = "https://api.telegram.org/bot$token/";
    
    echo '<pre>content = '; print_r($content); echo '</pre>';
    $update = json_decode($content, true);
    if(!@$update["message"]) $val = $update['callback_query'];
    else $val = $update;
    
    $chat_id = $val['message']['chat']['id'];
    $text = $val['message']['text'];
    $update_id = $val['update_id'];
    $sender = $val['message']['from'];
    ?>
    
    <?php 
    $data = json_decode(file_get_contents("https://api.binance.me/api/v3/ticker/24hr"), TRUE);
    if($text=="/view"){
        $a = 1;
        $msg .= "Bot Developed by Kelompok API 7!%0a%0a%0a";
        for($i=0;$i<=13;$i++){
        $asset = $data[$i]['symbol'];
        $lastPrice = $data[$i]['lastPrice'];
        $highPrice = $data[$i]['highPrice'];
        $lowPrice = $data[$i]['lowPrice'];
        $lastHigh = $highPrice-$lastPrice;
        $lastLow = $lastPrice-$lowPrice;

        $tb .= 'No.'.$a.
            '%0aAsset : '.$asset.
            '%0aLast Price : '.$lastPrice.
            '%0aHigh Price : '.$highPrice.
            '%0aLow Price  : '.$lowPrice.
            '%0aHigh-Last  : '.$lastHigh.
            '%0aLast-Low     : '.$lastLow.
            '%0a%0a';
            $a++;
        }
        file_get_contents($apiLink . "sendmessage?chat_id=$chat_id&text=".$msg.$tb."...");
        for($i=14;$i<=30;$i++){
            $asset = $data[$i]['symbol'];
            $lastPrice = $data[$i]['lastPrice'];
            $highPrice = $data[$i]['highPrice'];
            $lowPrice = $data[$i]['lowPrice'];
            $lastHigh = $highPrice-$lastPrice;
            $lastLow = $lastPrice-$lowPrice;
    
            $tb1 .= 'No.'.$a.
                '%0aAsset : '.$asset.
                '%0aLast Price : '.$lastPrice.
                '%0aHigh Price : '.$highPrice.
                '%0aLow Price  : '.$lowPrice.
                '%0aHigh-Last  : '.$lastHigh.
                '%0aLast-Low     : '.$lastLow.
                '%0a%0a';
                $a++;
            }
        file_get_contents($apiLink . "sendmessage?chat_id=$chat_id&text=".$msg.$tb1."...");
        for($i=31;$i<=45;$i++){
            $asset = $data[$i]['symbol'];
            $lastPrice = $data[$i]['lastPrice'];
            $highPrice = $data[$i]['highPrice'];
            $lowPrice = $data[$i]['lowPrice'];
            $lastHigh = $highPrice-$lastPrice;
            $lastLow = $lastPrice-$lowPrice;
    
            $tb2 .= 'No.'.$a.
                '%0aAsset : '.$asset.
                '%0aLast Price : '.$lastPrice.
                '%0aHigh Price : '.$highPrice.
                '%0aLow Price  : '.$lowPrice.
                '%0aHigh-Last  : '.$lastHigh.
                '%0aLast-Low     : '.$lastLow.
                '%0a%0a';
                $a++;
            }
        file_get_contents($apiLink . "sendmessage?chat_id=$chat_id&text=".$msg.$tb2."...");
        for($i=46;$i<=65;$i++){
            $asset = $data[$i]['symbol'];
            $lastPrice = $data[$i]['lastPrice'];
            $highPrice = $data[$i]['highPrice'];
            $lowPrice = $data[$i]['lowPrice'];
            $lastHigh = $highPrice-$lastPrice;
            $lastLow = $lastPrice-$lowPrice;
    
            $tb3 .= 'No.'.$a.
                '%0aAsset : '.$asset.
                '%0aLast Price : '.$lastPrice.
                '%0aHigh Price : '.$highPrice.
                '%0aLow Price  : '.$lowPrice.
                '%0aHigh-Last  : '.$lastHigh.
                '%0aLast-Low     : '.$lastLow.
                '%0a%0a';
                $a++;
            }
        file_get_contents($apiLink . "sendmessage?chat_id=$chat_id&text=".$msg.$tb3."...");
        for($i=66;$i<=80;$i++){
            $asset = $data[$i]['symbol'];
            $lastPrice = $data[$i]['lastPrice'];
            $highPrice = $data[$i]['highPrice'];
            $lowPrice = $data[$i]['lowPrice'];
            $lastHigh = $highPrice-$lastPrice;
            $lastLow = $lastPrice-$lowPrice;
    
            $tb4 .= 'No.'.$a.
                '%0aAsset : '.$asset.
                '%0aLast Price : '.$lastPrice.
                '%0aHigh Price : '.$highPrice.
                '%0aLow Price  : '.$lowPrice.
                '%0aHigh-Last  : '.$lastHigh.
                '%0aLast-Low     : '.$lastLow.
                '%0a%0a';
                $a++;
            }
        file_get_contents($apiLink . "sendmessage?chat_id=$chat_id&text=".$msg.$tb4."...");
        for($i=81;$i<=100;$i++){
            $asset = $data[$i]['symbol'];
            $lastPrice = $data[$i]['lastPrice'];
            $highPrice = $data[$i]['highPrice'];
            $lowPrice = $data[$i]['lowPrice'];
            $lastHigh = $highPrice-$lastPrice;
            $lastLow = $lastPrice-$lowPrice;
    
            $tb4 .= 'No.'.$a.
                '%0aAsset : '.$asset.
                '%0aLast Price : '.$lastPrice.
                '%0aHigh Price : '.$highPrice.
                '%0aLow Price  : '.$lowPrice.
                '%0aHigh-Last  : '.$lastHigh.
                '%0aLast-Low     : '.$lastLow.
                '%0a%0a';
                $a++;
            }
        file_get_contents($apiLink . "sendmessage?chat_id=$chat_id&text=".$msg.$tb4."...");
        for($i=101;$i<=125;$i++){
            $asset = $data[$i]['symbol'];
            $lastPrice = $data[$i]['lastPrice'];
            $highPrice = $data[$i]['highPrice'];
            $lowPrice = $data[$i]['lowPrice'];
            $lastHigh = $highPrice-$lastPrice;
            $lastLow = $lastPrice-$lowPrice;
    
            $tb5 .= 'No.'.$a.
                '%0aAsset : '.$asset.
                '%0aLast Price : '.$lastPrice.
                '%0aHigh Price : '.$highPrice.
                '%0aLow Price  : '.$lowPrice.
                '%0aHigh-Last  : '.$lastHigh.
                '%0aLast-Low     : '.$lastLow.
                '%0a%0a';
                $a++;
            }
        file_get_contents($apiLink . "sendmessage?chat_id=$chat_id&text=".$msg.$tb5."...");
        for($i=126;$i<=150;$i++){
            $asset = $data[$i]['symbol'];
            $lastPrice = $data[$i]['lastPrice'];
            $highPrice = $data[$i]['highPrice'];
            $lowPrice = $data[$i]['lowPrice'];
            $lastHigh = $highPrice-$lastPrice;
            $lastLow = $lastPrice-$lowPrice;
    
            $tb6 .= 'No.'.$a.
                '%0aAsset : '.$asset.
                '%0aLast Price : '.$lastPrice.
                '%0aHigh Price : '.$highPrice.
                '%0aLow Price  : '.$lowPrice.
                '%0aHigh-Last  : '.$lastHigh.
                '%0aLast-Low     : '.$lastLow.
                '%0a%0a';
                $a++;
            }
        file_get_contents($apiLink . "sendmessage?chat_id=$chat_id&text=".$msg.$tb6."...");
        for($i=151;$i<=175;$i++){
            $asset = $data[$i]['symbol'];
            $lastPrice = $data[$i]['lastPrice'];
            $highPrice = $data[$i]['highPrice'];
            $lowPrice = $data[$i]['lowPrice'];
            $lastHigh = $highPrice-$lastPrice;
            $lastLow = $lastPrice-$lowPrice;
    
            $tb7 .= 'No.'.$a.
                '%0aAsset : '.$asset.
                '%0aLast Price : '.$lastPrice.
                '%0aHigh Price : '.$highPrice.
                '%0aLow Price  : '.$lowPrice.
                '%0aHigh-Last  : '.$lastHigh.
                '%0aLast-Low     : '.$lastLow.
                '%0a%0a';
                $a++;
            }
        file_get_contents($apiLink . "sendmessage?chat_id=$chat_id&text=".$msg.$tb7."...");
        for($i=176;$i<=200;$i++){
            $asset = $data[$i]['symbol'];
            $lastPrice = $data[$i]['lastPrice'];
            $highPrice = $data[$i]['highPrice'];
            $lowPrice = $data[$i]['lowPrice'];
            $lastHigh = $highPrice-$lastPrice;
            $lastLow = $lastPrice-$lowPrice;
    
            $tb8 .= 'No.'.$a.
                '%0aAsset : '.$asset.
                '%0aLast Price : '.$lastPrice.
                '%0aHigh Price : '.$highPrice.
                '%0aLow Price  : '.$lowPrice.
                '%0aHigh-Last  : '.$lastHigh.
                '%0aLast-Low     : '.$lastLow.
                '%0a%0a';
                $a++;
            }
        file_get_contents($apiLink . "sendmessage?chat_id=$chat_id&text=".$msg.$tb8."...");
    }
        
}
    ?>