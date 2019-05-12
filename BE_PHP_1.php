<?php

class Palindrome
{
    public static function isPalindrome($word)
    {
    $word = preg_replace('/[^a-zA-Z]/', '', $word);
    $word = strtolower($word);
        if($word)
            $hasil_word = $word == strrev($word);
        else
            $hasil_word = '';
    
    return $hasil_word;
    }
}

echo Palindrome::isPalindrome('Deleveled');

?>
