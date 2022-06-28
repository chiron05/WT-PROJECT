<?php
    $var= $_POST['search_crypt'];
    
$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://coinranking1.p.rapidapi.com/search-suggestions?referenceCurrencyUuid=yhjMzLPhuIDl&query=".$var,
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
        "X-RapidAPI-Host: coinranking1.p.rapidapi.com",
        "X-RapidAPI-Key: 2f5f4e3f93msh482029c05ac21abp1afeb7jsn17c4b9c2d72b"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	$searched_cryto_coin = json_decode($response, true);
}

?>

<?php
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
    include "../config/home_api.php";
    include "../config/home_cards_api.php";
    include "../config/math.php";
    include "../config/all_crypto_cards.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CryptoVerse</title>
    <link rel="stylesheet" href="../css/home.css">
</head>
<body>
    <div class="main-container">
    <div class="side-view">
       <div class="icon-data" style="display: flex;">
           <img src="../images/cryptocurrency.png" alt="">
           <h1 style="color: rgb(24,138,248);">CryptoVerse</h1>
       </div>
       <div class="side_navBar">
           <div class="nav_home"><a href="http://localhost/cryptoverse/html/home.php" style="color: rgb(246, 248, 250);"><h3>Home</h3></a></div>
           <div class="nav_home"><a href="http://localhost/cryptoverse/html/all_crypto_cards.php" style="color: rgb(246, 248, 250);"><h3>Cryptocurrencies</h3></a></div>
           <div class="nav_home"><a href="http://localhost/cryptoverse/html/all_news.php" style="color: rgb(246, 248, 250);"><h3>News</h3></a></div>
       </div>
    </div>
    <div class="data-container">
        <div style="display: flex; justify-content: space-between; width: 70vw;">
        </div>
        <br>

        <div class="top-crypto">

            <?php

                for ($i = 0; $i < sizeof($searched_cryto_coin['data']['coins']); $i++) {
                    $uuid = $searched_cryto_coin['data']['coins'][$i]['uuid'];
                    $name = $searched_cryto_coin['data']['coins'][$i]['name'];
                    $iconUrl = $searched_cryto_coin['data']['coins'][$i]['iconUrl'];
                    // $marketCap = $searched_cryto_coin['data']['coins'][$i]['marketCap'];
                    $price = $searched_cryto_coin['data']['coins'][$i]['price'];
                    // $change = $searched_cryto_coin['data']['coins'][$i]['change'];
                    // $rank = $searched_cryto_coin['data']['coins'][$i]['rank'];

                    echo '
                    <div class="top-crypto-cards">
                        <a href="./CryptInfo.php?uuid=' . $uuid . '" style="color: black;">
                            <div class="card-crypt" style="background-color: rgb(255, 255, 255);">
                                <div style="display: flex; justify-content: space-evenly; width: 300px;">  
                                    <h3> ' .$i+1 .': ' . $name . '</h3>
                                    <img src="' .  $iconUrl. '" alt="" >
                                </div> 
                                <br>
                                <div style="display: flex; flex-direction: column; ">
                                    <p style="margin-top: 20px;">Price: ' . nice_number($price) . '</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    ';
                }
            ?>
        </div>



        

        </div>


</div>


    

<br><br>

<br><br>


        
     

       
</body>
</html>