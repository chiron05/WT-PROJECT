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
        <form action="http://localhost/cryptoverse/html/searched_cryto_coins.php" method="POST">
           <input type="text" name="search_crypt">
           <button type="submit">search<button>
        </form>
        </div>
        <br>

        <div class="top-crypto">

            <?php

                for ($i = 0; $i < 51; $i++) {
                    $uuid = $allcryptocoins['data']['coins'][$i]['uuid'];
                    $name = $allcryptocoins['data']['coins'][$i]['name'];
                    $iconUrl = $allcryptocoins['data']['coins'][$i]['iconUrl'];
                    $marketCap = $allcryptocoins['data']['coins'][$i]['marketCap'];
                    $price = $allcryptocoins['data']['coins'][$i]['price'];
                    $change = $allcryptocoins['data']['coins'][$i]['change'];
                    $rank = $allcryptocoins['data']['coins'][$i]['rank'];

                    echo '
                    <div class="top-crypto-cards">
                        <a href="./CryptInfo.php?uuid=' . $uuid . '" style="color: black;">
                            <div class="card-crypt" style="background-color: rgb(255, 255, 255);">
                                <div style="display: flex; justify-content: space-evenly; width: 300px;">  
                                    <h3> ' .  $rank . ' ' . $name . '</h3>
                                    <img src="' .  $iconUrl. '" alt="" >
                                </div> 
                                <br>
                                <div style="display: flex; flex-direction: column; ">
                                    <p style="margin-top: 20px;">Price: ' . nice_number($price) . '</p>
                                    <p style="margin-top: 10px;">Market Cap: ' . nice_number($marketCap) . '</p>
                                    <p style="margin-top: 10px;">Daily Change: ' . $change . '</p>
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


        
     

       


<footer class="footer" >
    <div class="container">
        <h2 style="color: aliceblue; margin-left: 30px;" >CryptoVerse</h2>
        <div class="links">
            <a href="http://localhost/cryptoverse/html/home.php">Home</a>
            <a href="../html/Crypto.html">Cryptocurrencies</a>
            <a href="">News</a>
        </div>
    </div>
</footer>

</body>
</html>