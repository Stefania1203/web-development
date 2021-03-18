<?php
header("Content-Type: text/plain");
$email = getGETParametr("email");
if (file_exists("data/$email.txt")) 
{
    $lines = file("data/$email.txt") or die('Can`t read file'); // читаем все строки файла в массив
    echo 'First name: '. $lines[0];
    echo 'Last name: '. $lines[1];
    echo 'Email: '. $lines[2];
    echo 'Age: '. $lines[3];
} 
else 
{
    echo "File 'data/$email' not exists";
} 
function getGETParametr(string $valueParameter): ?string
{
    return isset($_GET[$valueParameter]) ? (string) $_GET[$valueParameter] : null;
}	   
?>
