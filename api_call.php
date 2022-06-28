



<?php

    include 'config/cryptoinfo_api.php';

    print("<pre>".print_r($cryptoInfo, true)."</pre>");
























    // include "config/home_cards_api.php";
    // include "config/math.php";
    // // coins ->
    // // name, iconUrl, marketCap, price, change, rank

    // // print_r("<pre>" .$cryptoCoinsResult);    
    // // print("<pre>".print_r($cryptoCoinsResult, true)."</pre>");

    // $name = $cryptoCoinsResult['data']['coins'][0]['name'];
    // $iconUrl = $cryptoCoinsResult['data']['coins'][0]['iconUrl'];
    // $marketCap = $cryptoCoinsResult['data']['coins'][0]['marketCap'];
    // $price = $cryptoCoinsResult['data']['coins'][0]['price'];
    // $change = $cryptoCoinsResult['data']['coins'][0]['change'];
    // $rank = $cryptoCoinsResult['data']['coins'][0]['rank'];
    // $uuid = $cryptoCoinsResult['data']['coins'][0]['uuid'];

    // echo '
    //     <link rel="stylesheet" href="css/home.css">
    // ';

    // for ($i = 0; $i < 3; $i++) {
    //     $name = $cryptoCoinsResult['data']['coins'][$i]['name'];
    //     $iconUrl = $cryptoCoinsResult['data']['coins'][$i]['iconUrl'];
    //     $marketCap = $cryptoCoinsResult['data']['coins'][$i]['marketCap'];
    //     $price = $cryptoCoinsResult['data']['coins'][$i]['price'];
    //     $change = $cryptoCoinsResult['data']['coins'][$i]['change'];
    //     $rank = $cryptoCoinsResult['data']['coins'][$i]['rank'];
    //     $uuid = $cryptoCoinsResult['data']['coins'][0]['uuid'];
    // echo $uuid;


    //     echo '
    //     <div class="top-crypto-cards">
    //         <a href="html/CryptInfo.php?uuid=' . $uuid . '" style="color: black;">
    //         <div class="card-crypt" style="background-color: rgb(255, 255, 255);">
    //             <div style="display: flex;
    //             justify-content: space-evenly;
    //             width: 300px;">  
    //                 <h3> ' .  $rank . ' ' . $name . '</h3>
    //                 <img src="' .  $iconUrl. '" alt="" >
    //             </div> 
    //             <br>
    //             <div style="display: flex; flex-direction: column; ">
    //             <p style="margin-top: 20px;">Price: 43.2k</p>
    //             <p style="margin-top: 10px;">Market Cap: ' . nice_number($marketCap) . '</p>
    //             <p style="margin-top: 10px;">Daily Change: ' . $change . '</p>
    //         </div>
    //         </a>
    //     </div>
    //     ';
    // }

    


    // <div class="top-crypto-cards">
    //     <a href="./CryptInfo.html" style="color: black;">
    //     <div class="card-crypt" style="background-color: rgb(255, 255, 255);">
    //         <div style="display: flex;
    //         justify-content: space-evenly;
    //         width: 300px;">  
    //             <h3>1 Bitcoin</h6>
    //             <img src="https://cdn.coinranking.com/bOabBYkcX/bitcoin_btc.svg" alt="" >
    //         </div> 
    //         <br>
    //         <div style="display: flex; flex-direction: column; ">
    //         <p style="margin-top: 20px;">Price: 43.2k</p>
    //         <p style="margin-top: 10px;">Market Cap: 825.7B</p>
    //         <p style="margin-top: 10px;">Daily Change: -4.3%</p>
    //     </div>
    //     </a>
    // </div>















    // include 'config/math.php';

    // $curl = curl_init();

    // curl_setopt_array($curl, [
    // CURLOPT_URL => "https://coinranking1.p.rapidapi.com/stats?referenceCurrencyUuid=yhjMzLPhuIDl",
    // CURLOPT_RETURNTRANSFER => true,
    // CURLOPT_FOLLOWLOCATION => true,
    // CURLOPT_ENCODING => "",
    // CURLOPT_MAXREDIRS => 10,
    // CURLOPT_TIMEOUT => 30,
    // CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    // CURLOPT_CUSTOMREQUEST => "GET",
    // CURLOPT_HTTPHEADER => [
    // "X-RapidAPI-Host: coinranking1.p.rapidapi.com",
    // "X-RapidAPI-Key: 2f5f4e3f93msh482029c05ac21abp1afeb7jsn17c4b9c2d72b"
    // ],
    // ]);

    // $response = curl_exec($curl);
    // $err = curl_error($curl);

    // curl_close($curl);

    // if ($err) {
    // echo "cURL Error #:" . $err;
    // } else {
    // //  echo $response;
    //     $res = json_decode($response, true);
    //     // print_r($res);

    //     $value = $res['data']['totalMarketCap'];
    //     echo nice_number($value);

    // }

?>