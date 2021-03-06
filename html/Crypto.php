<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
    <div class="data-container" >
        <div class="search">
            <input type="search" placeholder="Search Cryptocurrency" >
        </div>

        <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <p>1 Bitcoin</p>
                <br>
                <p>Price: 43.2k</p>
                <br>
                <p>The Bitcoin blockchain is a database, the so-called ‘ledger’, that consists of bitcoin transaction records. For new transactions to be added to the ledger, the nodes must agree that the transaction is real and valid. The blockchain is public and contains records of all the transactions taking place.</p>
            </div>
        </div>
       
        <div style="display: flex;">
            <button id="myBtn" style="border: none">
                <div class="card-crypt" style="background-color: rgb(255, 255, 255);">
                    <div style="display: flex; justify-content: space-evenly; width: 300px;">  
                        <h3>1 Bitcoin</h3>
                        <img src="https://cdn.coinranking.com/bOabBYkcX/bitcoin_btc.svg" alt="" >
                    </div> 
                    <br>
                    <div style="display: flex; flex-direction: column; ">
                        <p style="margin-top: 20px;">Price: 43.2k</p>
                        <p style="margin-top: 10px;">Market Cap: 825.7B</p>
                        <p style="margin-top: 10px;">Daily Change: -4.3%</p>
                    </div>
                </div>
            </button>

        <div id="eth" class="card-crypt" style="background-color: rgb(255, 255, 255);  margin-left: 50px;">
            
            <div style="display: flex;
            justify-content: space-evenly;
            width: 300px;">  
                <h3>2 ethereum</h6>
                <img src="https://cdn.coinranking.com/rk4RKHOuW/eth.svg" alt="" >
            </div> 
            <br>
            <div style="display: flex; flex-direction: column; ">
            <p style="margin-top: 20px;">Price: 43.2k</p>
            <p style="margin-top: 10px;">Market Cap: 825.7B</p>
            <p style="margin-top: 10px;">Daily Change: -4.3%</p>
        </div>
    </div>
    <div class="card-crypt" style="background-color:  rgb(255, 255, 255); margin-left: 50px;">
            
        <div style="display: flex;
        justify-content: space-evenly;
        width: 300px;">  
            <h3>3 Tether USD</h6>
            <img src="https://cdn.coinranking.com/mgHqwlCLj/usdt.svg" alt="" >
        </div> 
        <br>
        <div style="display: flex; flex-direction: column; ">
        <p style="margin-top: 20px;">Price: 43.2k</p>
        <p style="margin-top: 10px;">Market Cap: 825.7B</p>
        <p style="margin-top: 10px;">Daily Change: -4.3%</p>
    </div>
</div>

</div>

<div class="top-crypto-cards" style="margin-top: 30px;">
<div class="card-crypt" style="background-color:  rgb(255, 255, 255);">
    <div style="display: flex;
    justify-content: space-evenly;
    width: 300px;">  
        <h3>4 Binance Coin</h6>
        <img src="https://cdn.coinranking.com/B1N19L_dZ/bnb.svg" alt="" >
    </div> 
    <br>
    <div style="display: flex; flex-direction: column; ">
    <p style="margin-top: 20px;">Price: 43.2k</p>
    <p style="margin-top: 10px;">Market Cap: 825.7B</p>
    <p style="margin-top: 10px;">Daily Change: -4.3%</p>
</div>
</div>

<div class="card-crypt" style="background-color:  rgb(255, 255, 255);  margin-left: 50px;">

    <div style="display: flex;
    justify-content: space-evenly;
    width: 300px;">  
        <h3>5 USDC</h6>
        <img src="https://cdn.coinranking.com/jkDf8sQbY/usdc.svg" alt="" >
    </div> 
    <br>
    <div style="display: flex; flex-direction: column; ">
    <p style="margin-top: 20px;">Price: 43.2k</p>
    <p style="margin-top: 10px;">Market Cap: 825.7B</p>
    <p style="margin-top: 10px;">Daily Change: -4.3%</p>
</div>
</div>
<div class="card-crypt" style="background-color:  rgb(255, 255, 255); margin-left: 50px;">
   
    <div style="display: flex;
    justify-content: space-evenly;
    width: 300px;">  
        <h3>6 HEX</h6>
        <img src="https://cdn.coinranking.com/iseN4Am58/hex-vector.svg" alt="" >
    </div> 
    <br>
    <div style="display: flex; flex-direction: column; ">
    <p style="margin-top: 20px;">Price: 43.2k</p>
    <p style="margin-top: 10px;">Market Cap: 825.7B</p>
    <p style="margin-top: 10px;">Daily Change: -4.3%</p>
</div>
</div>

</div>

<div class="top-crypto-cards" style="margin-top: 30px;">
<div class="card-crypt" style="background-color: rgb(255, 255, 255);">
    <div style="display: flex;
    justify-content: space-evenly;
    width: 300px;">  
        <h3>7 Solona</h6>
        <img src="https://cdn.coinranking.com/yvUG4Qex5/solana.svg" alt="" >
    </div> 
    <br>
    <div style="display: flex; flex-direction: column; ">
    <p style="margin-top: 20px;">Price: 43.2k</p>
    <p style="margin-top: 10px;">Market Cap: 825.7B</p>
    <p style="margin-top: 10px;">Daily Change: -4.3%</p>
</div>
</div>

<div class="card-crypt" style="background-color: rgb(255, 255, 255);  margin-left: 50px; ">
 
    <div style="display: flex;
    justify-content: space-evenly;
    width: 300px;">  
        <h3>8 Terra</h6>
        <img src="https://cdn.coinranking.com/F-PJdF8Um/LUNA.svg" alt="" >
    </div> 
    <br>
    <div style="display: flex; flex-direction: column; ">
    <p style="margin-top: 20px;">Price: 43.2k</p>
    <p style="margin-top: 10px;">Market Cap: 825.7B</p>
    <p style="margin-top: 10px;">Daily Change: -4.3%</p>
</div>
</div>
<div class="card-crypt" style="background-color:  rgb(255, 255, 255); margin-left: 50px;">
 
    <div style="display: flex;
    justify-content: space-evenly;
    width: 300px;">  
        <h3>9 XRP</h6>
        <img src="https://cdn.coinranking.com/B1oPuTyfX/xrp.svg" alt="" >
    </div> 
    <br>
    <div style="display: flex; flex-direction: column; ">
    <p style="margin-top: 20px;">Price: 43.2k</p>
    <p style="margin-top: 10px;">Market Cap: 825.7B</p>
    <p style="margin-top: 10px;">Daily Change: -4.3%</p>
</div>
</div>

</div>
</div>  
   
</div>
</div>

<footer class="footer">
    <div class="container">
    <h2 style="color: aliceblue; margin-left: 30px;" >CryptoVerse</h2>
    <div class="links">
        <a href="http://localhost/cryptoverse/html/home.php">Home</a>
        <a href="./Crypto.html">Cryptocurrencies</a>
        <a href="./News.html">News</a>
    </div>
</div>
</footer>
<script>

var flag = true;

$(document).ready(function(){
 $('#myBtn').click(function(){
    modal.style.display = "block";
    console.log('heuscf');
 })

 $("#eth").click(function(){
     if(flag){
        $("#eth").animate({
      left: '50%',
      height: '+=50px',
      width: '+=50px'
    });
    flag = false;
     }
     else{
    modal.style.display = "block";  
        $("#eth").animate({
      left: '50%',
      height: '-=50px',
      width: '-=50px'
    });
    flag = true;
     }

  });



});

    // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
// btn.onclick = function() {
//   modal.style.display = "block";
// }

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>
</html>