<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consumindo uma API em PHP</title>
</head>
<body>

  <?php 
    $url = "https://swapi.dev/api/people/?page=2";
    $ch = curl_init($url);

    //convertendo em um array
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");

    $resultado = json_decode(curl_exec($ch));

    //var_dump($resultado);

    foreach($resultado->results as $pessoa){
      echo "Nome: " . $pessoa->name . "<br>";
      echo "Altura: " . $pessoa->height . "<br>";

      foreach ($pessoa->films as $filme) {
        echo "Filme: " . $filme . "<br>";
      }

      echo "<hr>";
    }
  ?>
  
</body>
</html>