<?php

require_once("../config/config.php");
require_once("../config/function.php");


// function getPriceCryto($coin)
// {

//     $curl = curl_init();

//     curl_setopt_array($curl, array(
//         CURLOPT_URL => 'https://api.api-ninjas.com/v1/cryptoprice?symbol=' . $coin,
//         CURLOPT_RETURNTRANSFER => true,
//         CURLOPT_ENCODING => '',
//         CURLOPT_MAXREDIRS => 10,
//         CURLOPT_TIMEOUT => 0,
//         CURLOPT_FOLLOWLOCATION => true,
//         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//         CURLOPT_CUSTOMREQUEST => 'GET',
//         CURLOPT_HTTPHEADER => array(
//             'X-Api-Key: xVBh3JFrYwjY0exaZBU7LQ==LsBketfaep8cOSHZ'
//         ),
//     ));

//     $response = curl_exec($curl);

//     curl_close($curl);
//     echo '<pre>';
//     var_dump($response);
//     echo '<br>';
//     return json_decode( $response);
// }



// foreach ($BNZ->get_list("SELECT * FROM `coin`") as $row) {

//     $getPrice = getPriceCryto($row['symboy']);

//     $BNZ->update(
//         'coin',
//         [
//             'price' => $getPrice->price
//             , 'time' => $getPrice->timestamp,
//         ],
//         " `id` = '" . $row['id'] . "' "
//     );
// }


$t = file_get_contents('https://crypto.com/price');

// dd(check_string($t));

$tbl = explode('class="css-1v8x7dw">', $t)[1];
$tbl = explode('</table>', $tbl)[0];

// dd(check_string($btc));

$btc =  explode('<tr>', $tbl)[0];
$btc =  explode('</tr>', $btc)[1];

$btc_price =  explode('style="word-wrap:normal">', $btc)[0];
$btc_price =  explode('class="chakra-text css-13hqrwd">$', $btc_price)[1];
$btc_price =  explode('</p>', $btc_price)[0];


$btc_change24h =  explode('style="word-wrap:normal">', $btc)[1];
$btc_change24h =  explode('</p>', $btc_change24h)[0];

$eth =  explode('<tr>', $tbl)[0];
$eth =  explode('</tr>', $eth)[2];

$eth_price =  explode('style="word-wrap:normal">', $eth)[0];
$eth_price =  explode('class="chakra-text css-13hqrwd">$', $eth_price)[1];
$eth_price =  explode('</p>', $eth_price)[0];


$eth_change24h =  explode('style="word-wrap:normal">', $eth)[1];
$eth_change24h =  explode('</p>', $eth_change24h)[0];

$bnb =  explode('<tr>', $tbl)[0];
$bnb =  explode('</tr>', $bnb)[4];

$bnb_price =  explode('style="word-wrap:normal">', $bnb)[0];
$bnb_price =  explode('class="chakra-text css-13hqrwd">$', $bnb_price)[1];
$bnb_price =  explode('</p>', $bnb_price)[0];

$bnb_change24h =  explode('style="word-wrap:normal">', $bnb)[1];
$bnb_change24h =  explode('</p>', $bnb_change24h)[0];

$USDT =  explode('<tr>', $tbl)[0];
$USDT =  explode('</tr>', $USDT)[3];

$USDT_price =  explode('style="word-wrap:normal">', $USDT)[0];
$USDT_price =  explode('class="chakra-text css-13hqrwd">$', $USDT_price)[1];
$USDT_price =  explode('</p>', $USDT_price)[0];

$USDT_change24h =  explode('style="word-wrap:normal">', $USDT)[1];
$USDT_change24h =  explode('</p>', $USDT_change24h)[0];

$TRX =  explode('<tr>', $tbl)[0];
$TRX =  explode('</tr>', $TRX)[10];

$TRX_price =  explode('style="word-wrap:normal">', $TRX)[0];
$TRX_price =  explode('class="chakra-text css-13hqrwd">$', $TRX_price)[1];
$TRX_price =  explode('</p>', $TRX_price)[0];

$TRX_change24h =  explode('style="word-wrap:normal">', $TRX)[1];
$TRX_change24h =  explode('</p>', $TRX_change24h)[0];



// $btc_price = str_replace(".", "", $btc_price);
$btc_price = str_replace(",", "", $btc_price);

// $eth_price = str_replace(".", "", $eth_price);
$eth_price = str_replace(",", "", $eth_price);

$BNZ->update('coin', [
    'price_24h' => $btc_change24h,
    'price' => $btc_price,
], " `symboy` = 'BTCUSDT' ");

$BNZ->update('coin', [
    'price_24h' => $eth_change24h,
    'price' => $eth_price,
], " `symboy` = 'ETHUSDT' ");


$BNZ->update('coin', [
    'price_24h' => $bnb_change24h,
    'price' => $bnb_price,
], " `symboy` = 'BNBUSDT' ");

$BNZ->update('coin', [
    'price_24h' => $USDT_change24h,
    'price' => $USDT_price,
], " `symboy` = 'USDTUSD4' ");


$BNZ->update('coin', [
    'price_24h' => $TRX_change24h,
    'price' => $TRX_price,
], " `symboy` = 'TRXUSDT' ");