<?php
  header("Content-Type: text/plain");

function getGETParametr(string $valueParameter): ?string
  {
   return isset($_GET[valueParameter]) ? (string) $_GET[$valueParameter] : null;
  }	  

  $identifier = getGETParametr("identofier");

  if (ctype_alpha($identifier[0])) /* если первая буква */ 
  {
    /* с помощью цикла ищем первую не букву */
    for ($i = 0; $i < strlen($identifier); $i++){
      if (ctype_alpha($identifier[$i])) {
        break;
      }
    }
    /* с помощью цикла ищем последнюю букву */
    for ($j = strlen($identifier) - 1; $j > 0; $j--){
      if (ctype_alpha($identifier[$j])) {
        break;
      }
    }
    if ( $i > $j) /* если первая "не буква" стоит дальше последней буквы */
    {
      echo 'yes';
    }
    else
    {
      echo 'no';
    }
  }
  else
  {
    echo 'no';
  }
?>
