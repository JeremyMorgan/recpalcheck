<?php

class RecPalCheck
{
    private $inputstring;

    public function __construct($inputstring)
    {
        // assign an input string on construction of instance
        $this->inputstring = $inputstring;
    }

    // checks if this instance was created with a palindrome for testing
    function checkPalindrome(){

      return $this->isPalindrome($this->inputstring, strlen($this->inputstring));

    }

    function isPalindrome($inputstring, $stringlength)
    {

      if ( $stringlength <= 1)
      {
        // if there is only one or zero characters, technically it's a palindrome
        return true;
      }

      // checks if first and last characters are equal
      if (substr($inputstring,0,1) == substr(strrev($inputstring), 0, 1)) 
      {
        // if true, cycles calls the function again with decremented string length
        return $this->isPalindrome($inputstring, ($stringlength -2));
      }
      else
      {
        // characters didn't match, not a palindrome
        return false;
      }
  }
}