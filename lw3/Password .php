<?php
  header("Content-Type: text/plain");
  $pw = $_GET['password'];
  if ($pw === null) {
	echo "Параметр не найден";
} else {
  /* начинаем с длинны */
  $n = strlen($pw);
  $safety = 4 * $n;

  /* считаем цифры */
  $n = 0;
  for ($i = 0; $i < strlen($pw); $i++)
  {
    if (ctype_digit($pw[$i])) $n++;
  }
  $safety += $n * 4;

  /* считаем символы в верхнем регистре */
  $n = 0;
  for ($i = 0; $i < strlen($pw); $i++)
  {
    if (ctype_upper($pw[$i])) $n++;
  }
  $safety += (strlen($pw) - $n) * 2;

  /* считаем символы в нижнем регистре */
  $n = 0;
  for ($i = 0; $i < strlen($pw); $i++)
  {
    if (ctype_lower($pw[$i])) $n++;
  }
  $safety += (strlen($pw) - $n) * 2;

  /* снова считаем цифры */
  $n = 0;
  for ($i = 0; $i < strlen($pw); $i++)
  {
    if (ctype_digit($pw[$i])) $n++;
  }
  if ($n == strlen($pw)) /* если пароль состоит только из цифр */
  {
    $safety -= strlen($pw);
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
  }

  /* повторяющиеся символы */
  for ($i = 0; $i < strlen($pw); $i++)
  {
    $n = substr_count($pw, $pw[$i]);
    if ($n > 1) $safety -= $n;
  }
  }

  echo $safety;
?>
