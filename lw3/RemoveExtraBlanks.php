<?php
header("Content-Type: text/plain");
$book = $_GET['text']; /* сохранили параметр text из GET в переменной */
$word = explode(" ", $book);
$space = '';
foreach ($word as $w)   /* цикл происходит перебор значений в массиве word */
{
  echo $space.$w;
  $space = ' ';
}
?>
