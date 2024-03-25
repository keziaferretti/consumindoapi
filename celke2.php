<?php 
  function api(){
    $url = "https://swapi.dev/api/people/";
    $people = json_decode(file_get_contents($url));

    foreach($people->results as $postar){
      print_r("Nome: " . $postar->name . "<br>");
      print_r("Altura: " . $postar->height . "<br>");
      
      foreach ($postar->films as $filme) {
        echo "Filme: " . $filme . "<br>";
      }
      echo "<hr>";
    }

  }
  $resultado = api();
  return $resultado;

?>