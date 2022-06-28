<?php
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
    include "../config/home_api.php";
    include "../config/home_cards_api.php";
    include "../config/math.php";
    include "../config/news_card_api.php";

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
       
    <br><br>
        <div style="display: flex; justify-content: space-between; width: 70vw;">
            <h1>Top CrytopCurrency News </h1>
            <a href="../html/all_crypto_cards.php" style="text-decoration: none; color: rgb(24,144,255); margin-top: 5px; font-weight: bold; font-size: larger;">SHOW MORE</a>
        </div>

        <!-- news -->
        <div class="top-crypto">

<?php

    for ($i = 0; $i <  sizeof($news_data["value"]); $i++) {
        $name= $news_data["value"][$i]["name"];
        $webite_url= $news_data["value"][$i]["url"];
        $image_1= $news_data["value"][$i]["image"]['thumbnail']['contentUrl'];
        $description= $news_data["value"][$i]["description"];
        $company_name=$news_data["value"][$i]["provider"][0]['name'];
        $company_image=$news_data["value"][$i]["provider"][0]['image']['thumbnail']['contentUrl'];
        $datePublished= $news_data["value"][$i]["datePublished"];

        echo '
        <div class="top-crypto-cards">
            <a href="'.$webite_url.'" style="color: black;">
                <div class="card-crypt" style="background-color: rgb(255, 255, 255);">
                <div class="news-details">
                <h3>'.$name.'</h2>
                <img style="width: 100px; height: 100px;" src="https://www.bing.com/th?id=OVFT.HCs8SCFzUDC8Q3h03UeYlS&pid=News alt=">
            </div>
                    <br>
                    <br>
        <p>'.$description.'</p>
        <br>
        <div class="news-icons">
            <img src="'.$company_image.'" alt="">
            <p>'. $company_name.'</p>
            <h5>'.$datePublished.'</h5>
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