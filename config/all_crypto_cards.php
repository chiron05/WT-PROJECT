<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://coinranking1.p.rapidapi.com/coins?limit=51",
    // CURLOPT_URL => "https://coinranking1.p.rapidapi.com/search-suggestions?referenceCurrencyUuid=yhjMzLPhuIDl&query=bitcoin",
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
	$allcryptocoins = json_decode($response, true);

}

?>
