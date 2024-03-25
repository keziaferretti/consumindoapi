<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consumindo API File_Get_Contents</title>
</head>
<body>
  <?php 
    $url = "https://swapi.dev/api/planets/";
    $planetas = json_decode(file_get_contents($url));
    //var_dump($planetas);

    foreach($planetas->results as $planeta){
      echo "Nome: " . $planeta->name . "<br>";
      echo "Clima: " . $planeta->climate . "<br>";
      echo "Terreno: " . $planeta->terrain . "<br>";
      echo "População: " . $planeta->population . "<br>";
      echo "<hr>";
    }
  
  ?>
  
</body>
</html>