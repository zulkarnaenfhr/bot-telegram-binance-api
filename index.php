<?php
$content = file_get_contents("php://input"); //Mengambil data Raw JSON
if($content){
    $token = '2103447613:AAH5D-aZ5LolbrI-u8DG9fYbf2oVhIPYp6U'; //Token Bot
    
    $apiLink = "https://api.telegram.org/bot$token/"; //API Link untuk bot Telegram
    
    echo '<pre>content = '; print_r($content); echo '</pre>'; //Melakukan print array. Digunakan untuk mempermudah membaca data array json.
    $update = json_decode($content, true); //Pada variable $update digunakan untuk mengubah data Json menjadi php
    if(!@$update["message"]) $val = $update['callback_query']; //Jika tidak ada error pada variable update maka variable val akan membaca data message dari $content
    else $val = $update; //Jika pesan yang terbaru sudah dibaca atau belum ada pesan lain, maka program akan menunggu pesan yang baru
    
    $chat_id = $val['message']['chat']['id']; //Mengambil data chat_id untuk mengirim pesan kepada pengguna
    $text = $val['message']['text']; //Mengambil data pesan yang dikirim oleh pengguna
    $update_id = $val['update_id']; //Mengambil data update apakah pesan paling baru atau tidak
    $sender = $val['message']['from']; //Mengambil data pesan dan pengirim
    ?>
    
    <?php 
    $data = json_decode(file_get_contents("https://api.binance.me/api/v3/ticker/24hr"), TRUE); //Digunakan untuk mengambil data json API dari binance
    if($text=="/view_binance"){ //Digunakan untuk mendeteksi pesan yang dikirim pengguna, apakah command atau hanya sebatas pesan random
        $a = 1;
        $msg .= "Bot Developed by Kelompok API 7!%0a%0a%0a";
        for($i=0;$i<=13;$i++){
        $asset = $data[$i]['symbol'];//Mengambil data asset dan pair pada api binance
        $lastPrice = $data[$i]['lastPrice']; // Mengambil data harga terakhir pada api binance
        $highPrice = $data[$i]['highPrice']; // Mengambil data harga tertinggi pada api binance
        $lowPrice = $data[$i]['lowPrice']; // Mengambil data harga terendah pada api binance
        $lastHigh = $highPrice-$lastPrice; // Mengambil data range dari harga terakhir ke tertinggi
        $lastLow = $lastPrice-$lowPrice; // Mengambil data range dari harga terakhir ke terendah
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
        file_get_contents($apiLink . "sendmessage?chat_id=$chat_id&text=".$msg.$tb."..."); //Digunakan untuk mengirimkan pesan kepada pengguna
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
    
    if($text==="/low_binance"){
        $a = 1;
        for($x=0;$x<15;$x++){
            $msg1 = "Aset yang sedang mengalami penurunan berdasarkan persentase!%0a%0a";
            $checkHL = $data[$x]['priceChangePercent'];
            if($checkHL < 0){
                $asset = $data[$x]['symbol'];
                $lastPrice = $data[$x]['lastPrice'];
                $highPrice = $data[$x]['highPrice'];
                $lowPrice = $data[$x]['lowPrice'];
                $lastHigh = $highPrice-$lastPrice;
                $lastLow = $lastPrice-$lowPrice;

                $low .= 'No.'.$a.
                '%0aAsset : '.$asset.
                '%0aLast Price : '.$lastPrice.
                '%0aHigh Price : '.$highPrice.
                '%0aLow Price  : '.$lowPrice.
                '%0aHigh-Last  : '.$lastHigh.
                '%0aLast-Low     : '.$lastLow.
                '%0a%0a';
                $a++;
                }
            }
            file_get_contents($apiLink . "sendmessage?chat_id=$chat_id&text=".$msg1.$low."...");
            for($x=16;$x<30;$x++){
                $checkHL = $data[$x]['priceChangePercent'];
                if($checkHL < 0){
                    $asset = $data[$x]['symbol'];
                    $lastPrice = $data[$x]['lastPrice'];
                    $highPrice = $data[$x]['highPrice'];
                    $lowPrice = $data[$x]['lowPrice'];
                    $lastHigh = $highPrice-$lastPrice;
                    $lastLow = $lastPrice-$lowPrice;
    
                    $low1 .= 'No.'.$a.
                    '%0aAsset : '.$asset.
                    '%0aLast Price : '.$lastPrice.
                    '%0aHigh Price : '.$highPrice.
                    '%0aLow Price  : '.$lowPrice.
                    '%0aHigh-Last  : '.$lastHigh.
                    '%0aLast-Low     : '.$lastLow.
                    '%0a%0a';
                    $a++;
                    }
                }
            file_get_contents($apiLink . "sendmessage?chat_id=$chat_id&text=".$low1."...");
            for($x=31;$x<45;$x++){
                $checkHL = $data[$x]['priceChangePercent'];
                if($checkHL < 0){
                    $asset = $data[$x]['symbol'];
                    $lastPrice = $data[$x]['lastPrice'];
                    $highPrice = $data[$x]['highPrice'];
                    $lowPrice = $data[$x]['lowPrice'];
                    $lastHigh = $highPrice-$lastPrice;
                    $lastLow = $lastPrice-$lowPrice;
    
                    $low2 .= 'No.'.$a.
                    '%0aAsset : '.$asset.
                    '%0aLast Price : '.$lastPrice.
                    '%0aHigh Price : '.$highPrice.
                    '%0aLow Price  : '.$lowPrice.
                    '%0aHigh-Last  : '.$lastHigh.
                    '%0aLast-Low     : '.$lastLow.
                    '%0a%0a';
                    $a++;
                    }
                }
            file_get_contents($apiLink . "sendmessage?chat_id=$chat_id&text=".$low2."...");
            for($x=46;$x<60;$x++){
                $checkHL = $data[$x]['priceChangePercent'];
                if($checkHL < 0){
                    $asset = $data[$x]['symbol'];
                    $lastPrice = $data[$x]['lastPrice'];
                    $highPrice = $data[$x]['highPrice'];
                    $lowPrice = $data[$x]['lowPrice'];
                    $lastHigh = $highPrice-$lastPrice;
                    $lastLow = $lastPrice-$lowPrice;
    
                    $low3 .= 'No.'.$a.
                    '%0aAsset : '.$asset.
                    '%0aLast Price : '.$lastPrice.
                    '%0aHigh Price : '.$highPrice.
                    '%0aLow Price  : '.$lowPrice.
                    '%0aHigh-Last  : '.$lastHigh.
                    '%0aLast-Low     : '.$lastLow.
                    '%0a%0a';
                    $a++;
                    }
                }
            file_get_contents($apiLink . "sendmessage?chat_id=$chat_id&text=".$low3."...");
            for($x=61;$x<75;$x++){
                $checkHL = $data[$x]['priceChangePercent'];
                if($checkHL < 0){
                    $asset = $data[$x]['symbol'];
                    $lastPrice = $data[$x]['lastPrice'];
                    $highPrice = $data[$x]['highPrice'];
                    $lowPrice = $data[$x]['lowPrice'];
                    $lastHigh = $highPrice-$lastPrice;
                    $lastLow = $lastPrice-$lowPrice;
    
                    $low4 .= 'No.'.$a.
                    '%0aAsset : '.$asset.
                    '%0aLast Price : '.$lastPrice.
                    '%0aHigh Price : '.$highPrice.
                    '%0aLow Price  : '.$lowPrice.
                    '%0aHigh-Last  : '.$lastHigh.
                    '%0aLast-Low     : '.$lastLow.
                    '%0a%0a';
                    $a++;
                    }
                }
            file_get_contents($apiLink . "sendmessage?chat_id=$chat_id&text=".$low4."...");
            for($x=76;$x<100;$x++){
                $checkHL = $data[$x]['priceChangePercent'];
                if($checkHL < 0){
                    $asset = $data[$x]['symbol'];
                    $lastPrice = $data[$x]['lastPrice'];
                    $highPrice = $data[$x]['highPrice'];
                    $lowPrice = $data[$x]['lowPrice'];
                    $lastHigh = $highPrice-$lastPrice;
                    $lastLow = $lastPrice-$lowPrice;
    
                    $low5 .= 'No.'.$a.
                    '%0aAsset : '.$asset.
                    '%0aLast Price : '.$lastPrice.
                    '%0aHigh Price : '.$highPrice.
                    '%0aLow Price  : '.$lowPrice.
                    '%0aHigh-Last  : '.$lastHigh.
                    '%0aLast-Low     : '.$lastLow.
                    '%0a%0a';
                    $a++;
                    }
                }
            file_get_contents($apiLink . "sendmessage?chat_id=$chat_id&text=".$low5."...");
        }
        if($text==="/high_binance"){
            $a = 1;
            for($x=0;$x<15;$x++){
                $msg1 = "Aset yang sedang mengalami Kenaikan berdasarkan persentase!%0a%0a";
                $checkHL = $data[$x]['priceChangePercent'];
                if($checkHL > 0){
                    $asset = $data[$x]['symbol'];
                    $lastPrice = $data[$x]['lastPrice'];
                    $highPrice = $data[$x]['highPrice'];
                    $lowPrice = $data[$x]['lowPrice'];
                    $lastHigh = $highPrice-$lastPrice;
                    $lastLow = $lastPrice-$lowPrice;
    
                    $hi .=  'No.'.$a.
                    '%0aAsset : '.$asset.
                    '%0aLast Price : '.$lastPrice.
                    '%0aHigh Price : '.$highPrice.
                    '%0aLow Price  : '.$lowPrice.
                    '%0aHigh-Last  : '.$lastHigh.
                    '%0aLast-Low     : '.$lastLow.
                    '%0a%0a';
                    $a++;
                    }
                }
                file_get_contents($apiLink . "sendmessage?chat_id=$chat_id&text=".$msg1.$hi."...");
                for($x=16;$x<30;$x++){
                    $msg1 = "Aset yang sedang mengalami Kenaikan berdasarkan persentase!%0a%0a";
                    $checkHL = $data[$x]['priceChangePercent'];
                    if($checkHL > 0){
                        $asset = $data[$x]['symbol'];
                        $lastPrice = $data[$x]['lastPrice'];
                        $highPrice = $data[$x]['highPrice'];
                        $lowPrice = $data[$x]['lowPrice'];
                        $lastHigh = $highPrice-$lastPrice;
                        $lastLow = $lastPrice-$lowPrice;
        
                        $hi1 .=  'No.'.$a.
                        '%0aAsset : '.$asset.
                        '%0aLast Price : '.$lastPrice.
                        '%0aHigh Price : '.$highPrice.
                        '%0aLow Price  : '.$lowPrice.
                        '%0aHigh-Last  : '.$lastHigh.
                        '%0aLast-Low     : '.$lastLow.
                        '%0a%0a';
                        $a++;
                        }
                    }
                file_get_contents($apiLink . "sendmessage?chat_id=$chat_id&text=".$hi1."...");
                for($x=31;$x<45;$x++){
                    $msg1 = "Aset yang sedang mengalami Kenaikan berdasarkan persentase!%0a%0a";
                    $checkHL = $data[$x]['priceChangePercent'];
                    if($checkHL > 0){
                        $asset = $data[$x]['symbol'];
                        $lastPrice = $data[$x]['lastPrice'];
                        $highPrice = $data[$x]['highPrice'];
                        $lowPrice = $data[$x]['lowPrice'];
                        $lastHigh = $highPrice-$lastPrice;
                        $lastLow = $lastPrice-$lowPrice;
        
                        $hi2 .=  'No.'.$a.
                        '%0aAsset : '.$asset.
                        '%0aLast Price : '.$lastPrice.
                        '%0aHigh Price : '.$highPrice.
                        '%0aLow Price  : '.$lowPrice.
                        '%0aHigh-Last  : '.$lastHigh.
                        '%0aLast-Low     : '.$lastLow.
                        '%0a%0a';
                        $a++;
                        }
                    }
                file_get_contents($apiLink . "sendmessage?chat_id=$chat_id&text=".$hi2."...");
                for($x=46;$x<60;$x++){
                    $msg1 = "Aset yang sedang mengalami Kenaikan berdasarkan persentase!%0a%0a";
                    $checkHL = $data[$x]['priceChangePercent'];
                    if($checkHL > 0){
                        $asset = $data[$x]['symbol'];
                        $lastPrice = $data[$x]['lastPrice'];
                        $highPrice = $data[$x]['highPrice'];
                        $lowPrice = $data[$x]['lowPrice'];
                        $lastHigh = $highPrice-$lastPrice;
                        $lastLow = $lastPrice-$lowPrice;
        
                        $hi3 .=  'No.'.$a.
                        '%0aAsset : '.$asset.
                        '%0aLast Price : '.$lastPrice.
                        '%0aHigh Price : '.$highPrice.
                        '%0aLow Price  : '.$lowPrice.
                        '%0aHigh-Last  : '.$lastHigh.
                        '%0aLast-Low     : '.$lastLow.
                        '%0a%0a';
                        $a++;
                        }
                    }
                file_get_contents($apiLink . "sendmessage?chat_id=$chat_id&text=".$hi3."...");
                for($x=60;$x<75;$x++){
                    $msg1 = "Aset yang sedang mengalami Kenaikan berdasarkan persentase!%0a%0a";
                    $checkHL = $data[$x]['priceChangePercent'];
                    if($checkHL > 0){
                        $asset = $data[$x]['symbol'];
                        $lastPrice = $data[$x]['lastPrice'];
                        $highPrice = $data[$x]['highPrice'];
                        $lowPrice = $data[$x]['lowPrice'];
                        $lastHigh = $highPrice-$lastPrice;
                        $lastLow = $lastPrice-$lowPrice;
        
                        $hi4 .=  'No.'.$a.
                        '%0aAsset : '.$asset.
                        '%0aLast Price : '.$lastPrice.
                        '%0aHigh Price : '.$highPrice.
                        '%0aLow Price  : '.$lowPrice.
                        '%0aHigh-Last  : '.$lastHigh.
                        '%0aLast-Low     : '.$lastLow.
                        '%0a%0a';
                        $a++;
                        }
                    }
                file_get_contents($apiLink . "sendmessage?chat_id=$chat_id&text=".$hi4."...");
                for($x=76;$x<100;$x++){
                    $msg1 = "Aset yang sedang mengalami Kenaikan berdasarkan persentase!%0a%0a";
                    $checkHL = $data[$x]['priceChangePercent'];
                    if($checkHL > 0){
                        $asset = $data[$x]['symbol'];
                        $lastPrice = $data[$x]['lastPrice'];
                        $highPrice = $data[$x]['highPrice'];
                        $lowPrice = $data[$x]['lowPrice'];
                        $lastHigh = $highPrice-$lastPrice;
                        $lastLow = $lastPrice-$lowPrice;
        
                        $hi5 .=  'No.'.$a.
                        '%0aAsset : '.$asset.
                        '%0aLast Price : '.$lastPrice.
                        '%0aHigh Price : '.$highPrice.
                        '%0aLow Price  : '.$lowPrice.
                        '%0aHigh-Last  : '.$lastHigh.
                        '%0aLast-Low     : '.$lastLow.
                        '%0a%0a';
                        $a++;
                        }
                    }
                file_get_contents($apiLink . "sendmessage?chat_id=$chat_id&text=".$hi5."...");
            }
    }
?>