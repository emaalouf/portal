<?php

namespace App\Helpers;

class Tokenizer
{
    public function tokenize($text)
    {
        // Split the text into individual words based on whitespace and punctuation
        $words = preg_split('/[\s\p{P}]+/u', $text, -1, PREG_SPLIT_NO_EMPTY);

        // Remove any empty strings and convert words to lowercase
        $words = array_filter($words);
        $words = array_map('strtolower', $words);

        return $words;
    }
}
