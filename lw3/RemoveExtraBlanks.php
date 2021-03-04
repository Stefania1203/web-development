<?php
header("Content-Type: text/plain");
$text = $_GET['text'];
if ($text === null) {
  echo "Parameter 'text' not found!";
}  else {
  $text = trim($text);     /* удаление пробелов перед и после строки */
  while( strpos($text,"  ") != false) /* 2 значения не равны входим в цикл */
  {
    $text = str_replace("  ", " ", $text);
  }
  echo $text;
}
?>
