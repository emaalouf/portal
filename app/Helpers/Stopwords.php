<?php

namespace App\Helpers;

class Stopwords
{
    protected $stopwords = [
        'a', 'an', 'and', 'are', 'as', 'at', 'be', 'by', 'for', 'from', 'has', 'he',
        'in', 'is', 'it', 'its', 'of', 'on', 'that', 'the', 'to', 'was', 'were', 'with'
        // Add more stopwords as needed
    ];

    public function removeStopwords($tokens)
    {
        // Filter out stopwords from the tokens
        $filteredTokens = array_diff($tokens, $this->stopwords);

        return $filteredTokens;
    }
}
