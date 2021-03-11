<?php
header("Content-Type: text/plain");
function getGETParameter(string $valueParameter): ?string
{
    return isset($_GET[$valueParameter]) ? (string) $_GET[$valueParameter] : null;
}	  
$pw = getGETParameter("password");
if ($pw === null)
{
   echo "Параметр не найден";
} 
else
{
    /* начинаем с длинны */
    $n = strlen($pw);
    $safety = 4 * $n;
    echo "Длина: $safety \n";
    /* считаем цифры */
    $n = 0;
    for ($i = 0; $i < strlen($pw); $i++)
    {
        if (ctype_digit($pw[$i])) $n++;
    }
    $safety += $n * 4;
    echo "С учетом цифр: $safety \n";
    /* считаем символы в верхнем регистре */
    $n = 0;
    for ($i = 0; $i < strlen($pw); $i++)
    {
    if (ctype_upper($pw[$i])) $n++;
    }
    $safety += (strlen($pw) - $n) * 2;
    echo "C учетом символов в верхнем регистре: $safety \n";
    /* считаем символы в нижнем регистре */
    $n = 0;
    for ($i = 0; $i < strlen($pw); $i++)
    {
        if (ctype_lower($pw[$i])) $n++;
    }
    $safety += (strlen($pw) - $n) * 2;
    echo "C учетом символов в нижнем регистре: $safety \n";
    /* снова считаем цифры */
    $n = 0;
    for ($i = 0; $i < strlen($pw); $i++)
    {
       if (ctype_digit($pw[$i])) $n++;
    }
    if ($n == strlen($pw)) /* если пароль состоит только из цифр */
    {
       $safety -= strlen($pw);
       echo "C учетом того если пароль состоит только из цифр: $safety \n";
    }

    /* считаем буквы */
    $n = 0;
    for ($i = 0; $i < strlen($pw); $i++)
    {
        if (ctype_alpha($pw[$i])) $n++;
    }
    if ($n == strlen($pw)) /* если пароль состоит только из букв */
    {
        $safety -= strlen($pw);
        echo "C учетом того если пароль состоит только из букв: $safety \n";
    }

  /* повторяющиеся символы */
  for ($i = 0; $i < strlen($pw); $i++)
  {
      $n = substr_count($pw, $pw[$i]);
      if ($n > 1) 
      $safety -= $n;
  }
  echo "Надежность пароля: $safety";  
  }
