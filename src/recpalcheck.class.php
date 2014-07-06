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

    function isPalindrome($inputstring)
    {
        if (strlen($inputstring) <= 1){
            // if there is only one or zero characters, technically it's a palindrome
            return true;
        }
        else {

            if (substr($inputstring,0,1) == substr($inputstring,(strlen($inputstring) - 1),1)) {

                 return $this->isPalindrome(substr($inputstring,1,strlen($inputstring) -2));
                
                }
                else { 
                
                    return false; 
                
                }
         }
    }
}