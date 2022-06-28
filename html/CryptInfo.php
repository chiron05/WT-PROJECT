<?php
  include '../config/cryptoinfo_api.php';
  include '../config/math.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../css/home.css" />
  </head>
  <body>
    <div class="main-container">
      <div class="side-view">
        <div class="icon-data" style="display: flex">
          <img src="../images/cryptocurrency.png" alt="" />
          <h1 style="color: rgb(24, 138, 248)">CryptoVerse</h1>
        </div>

        <div class="side_navBar">
          <div class="nav_home"><a href="http://localhost/cryptoverse/html/home.php" style="color: rgb(246, 248, 250);"><h3>Home</h3></a></div>
          <div class="nav_home"><a href="http://localhost/cryptoverse/html/all_crypto_cards.php" style="color: rgb(246, 248, 250);"><h3>Cryptocurrencies</h3></a></div>
          <div class="nav_home"><a href="http://localhost/cryptoverse/html/all_news.php" style="color: rgb(246, 248, 250);"><h3>News</h3></a></div>
      </div>
      </div>
      <div class="data-container">
        <div class="currancy_name">
          <h1>
            <?php
              echo $cryptoInfo['data']['coin']['name'] . ' (';
              echo $cryptoInfo['data']['coin']['symbol'] . ')';
            ?>
          </h1>
        </div>
        <div class="value_stats">
          <div class="stats_grp">
            <h2>
              <?php
                echo $cryptoInfo['data']['coin']['name'] . ' Value Statistics';
              ?>
            <br>
            <h3>
              <?php
                echo 'An overview Showing stats of ' . $cryptoInfo['data']['coin']['name'];
              ?>
            </h3>
          </div>
          <br>
          <div>
            <div class="stats">
              <h2>Price to USD</h5>
              <h3>
                <?php
                  echo '$' . nice_number($cryptoInfo['data']['coin']['price']);
                ?>
              </h3>
            </div>

            <div class="stats">
              <h2>Rank</h5>
              <h3>
                <?php
                  echo $cryptoInfo['data']['coin']['rank'];
                ?>
              </h3>
            </div>

            <div class="stats">
              <h2>Market Cap</h2>
              <h3>
                <?php
                  echo '$' . nice_number($cryptoInfo['data']['coin']['marketCap']);
                ?>
              </h3>
            </div>

            <div class="stats">
              <h2>All-time-high(daily avg.)</h2>
              <h3>
                <?php
                  echo '$' . nice_number($cryptoInfo['data']['coin']['allTimeHigh']['price']);
                ?>
              </h3>
            </div>
          </div>
        </div>



        <div class="value_stats" style="margin-top: 50px;">
          <div class="stats_grp">
            <h2>Other Statistics</h2>
            <br>
            <h3>An overview of all cryptocurrency</h3>
          </div>
          <br>
          <div>
            <div class="stats">
              <h2>Number of Markets</h5>
              <h3>
                <?php
                  echo $cryptoInfo['data']['coin']['numberOfMarkets'];
                ?>
              </h3>
            </div>

            <div class="stats">
              <h2>Number Of Exchange</h5>
              <h3>
                <?php
                  echo $cryptoInfo['data']['coin']['numberOfExchanges'];
                ?>
              </h3>
            </div>

            <div class="stats">
              <h2>Approved Supply</h2>
              <h3>
                <?php
                  if ($cryptoInfo['data']['coin']['supply']['confirmed']) echo "YES";
                  else echo "NO";                ?>
              </h3>
            </div>

            <div class="stats">
              <h2>Total Supply</h2>
              <h3>
                <?php
                  echo '$' . nice_number($cryptoInfo['data']['coin']['supply']['total']);
                ?>
              </h3>
            </div>

            <div class="stats">
              <h2>Circulating Supply</h2>
              <h3>
                <?php
                  echo '$' . nice_number($cryptoInfo['data']['coin']['supply']['circulating']);
                ?>
              </h3>
            </div>
          </div>
        </div>

        <div class="info_container">
          <div class="curr_info">
            <h2 style="color:  rgb(0,113,189);">
              <?php
                echo 'What is ' . $cryptoInfo['data']['coin']['name'] . '?';
              ?>
            </h2>
            <div class="main_info">
              <?php
                echo '<p>' . $cryptoInfo['data']['coin']['description'] . '</p>';
              ?>
            </div>
          </div>
        </div>
    
        
      </div>
    </div>

   
    <footer class="footer">
      <div class="container">
        <h2 style="color: aliceblue; margin-left: 30px">CryptoVerse</h2>
        <div class="links">
          <a href="http://localhost/cryptoverse/html/home.php">Home</a>
          <a href="../html/Crypto.html">Cryptocurrencies</a>
          <a href="./News.html">News</a>
        </div>
      </div>
    </footer>
  </body>
</html>
