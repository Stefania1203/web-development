<?php
header("Content-Type: text/plain");
$text = $_GET['document']; /* сохранили параметр text из GET в переменной */
if ($text === null) {
	echo "Параметр name не найден";
}  else {
	
	echo "Параметр name без пробелов:".Remove($text);
}
function Remove(string $string) : string {
         $word = explode(" ", $text);
         $space = '';
         foreach ($word as $w)   /* цикл происходит перебор значений в массиве word */
         {
            echo $space.$w;
            $space = ' ';
         }
	return $res;
 }	
?>
