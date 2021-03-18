<?php
header("Content-Type: text/plain");
$email = getGETParametr("email");
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
{
    echo "Параметр email задан не верно";
}
else
{ 
    $first_name = getGETParametr("first_name");
    $last_name = getGETParametr("laste_name");
    $email = getGETParametr("email");
    $age = getGETParametr("age");
    if (!file_exists("data/"))
		{
	      mkdir("data/");
	  }
    $fd = fopen("data/$email.txt", 'w') or die('Can`t create file');
    fputs($fd, $first_name . PHP_EOL);
    fputs($fd, $last_name . PHP_EOL);
    fputs($fd, $email . PHP_EOL);
    fputs($fd, $age . PHP_EOL);
    fclose($fd);
    echo "Done!";
}
function getGETParametr(string $valueParameter): ?string
{
    return isset($_GET[$valueParameter]) ? (string) $_GET[$valueParameter] : null;
}	    
?>
