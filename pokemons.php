<?php 

function api(){
  $url = "https://www.canalti.com.br/api/pokemons.json";
  $pokemons = json_decode(file_get_contents($url));

  foreach($pokemons->pokemon as $postar){
    print_r("id:" . $postar->id . "<br>");
    print_r("Nome: " . $postar->name . "<br>");
    print_r("<img src=$postar->img . <br>");
    echo "<hr>";
  }
}
$resultado = api();
return $resultado;


?>