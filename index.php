<?php
// URL da API
$api_url = 'https://api.hgbrasil.com/weather';
// Fazendo a requisição
$response = file_get_contents($api_url);

// Decodificando a resposta JSON
$data = json_decode($response, true);

// Extraindo informações relevantes
$city = $data['results']['city'];
$temp = $data['results']['temp'];
$description = $data['results']['description'];

// Exibindo os resultados
echo "Clima em $city: $temp °C ($description)";
?>
