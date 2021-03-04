<?php
header("Content-Type: text/plain");
function getGETParametr(string $valueParameter): ?string
{
    return isset($_GET[valueParameter]) ? (string) $_GET[$valueParameter] : null;
}	  
$text = getGETParametr("text");
if ($text === null) 
{
    echo "Parameter 'text' not found!";
}  
else 
{
    $text = trim($text);     /* удаление пробелов перед и после строки */
    while( strpos($text,"  ") === false) /* 2 значения не равны входим в цикл */
    {
        $text = str_replace("  ", " ", $text);
    }
    echo $text;
}
