<?php

require('src/recpalcheck.class.php');


$recpalcheck = new RecPalCheck($argv[1]);

if ($recpalcheck->checkPalindrome() == true){

   echo "\n\nCongrats you've got yourself a palindrome.\n\n";

}else {

   echo "\n\nSorry, This is not a palindrome\n\n";
}
