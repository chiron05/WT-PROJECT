<?php

    $curl = curl_init();

    curl_setopt_array($curl, [
    CURLOPT_URL => "https://bing-news-search1.p.rapidapi.com/news/search?q=Cryptocurrency&safeSearch=Off&textFormat=Raw&freshness=Day&count=10",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => [
        "x-bingapis-sdk: true",
        "x-rapidapi-host: bing-news-search1.p.rapidapi.com",
        "x-rapidapi-key: 2f5f4e3f93msh482029c05ac21abp1afeb7jsn17c4b9c2d72b"
    ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
    echo "cURL Error #:" . $err;
    } else {
      $news_data=json_decode($response, true);
    }
?>