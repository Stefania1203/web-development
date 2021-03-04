<?php
header("Content-Type: text/plain");
$text = $_GET['text'];
if ($text == null) {
  echo "Parameter 'text' not found!";
}  else {
  $text = trim($text);
  while( strpos($text,"  ") != false)
  {
    $text = str_replace("  ", " ", $text);
  }
  echo $text;
}
?>
