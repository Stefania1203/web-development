<?php
header("Content-Type: text/plain");
         $text = $_GET['text']; /* сохранили параметр text из GET в переменной */
         $word = explode(" ", $text);
         $space = '';
         foreach ($word as $w)   /* цикл происходит перебор значений в массиве word */
         {
            echo $space.$w;
            $space = ' ';
         }	
