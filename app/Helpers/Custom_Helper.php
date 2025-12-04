<?php

if (! function_exists('getFirstWord')) {

    // Extract first word (useful to get first name of a user)
    function getFirstWord(string $text): string {
        // Trim leading/trailing whitespace
        $text = trim($text);

        // Find the position of the first space
        $pos = strpos($text, ' ');

        // If no space found, the entire string is one word
        if ($pos === false) {
            return $text;
        }

        // Return the substring from the start to the first space
        return substr($text, 0, $pos);
    }
    
}