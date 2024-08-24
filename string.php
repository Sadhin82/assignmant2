<?php 

function processStrings($strings) {
    foreach ($strings as $string) {
        $lowercaseString = strtolower($string);
        $vowelCount = preg_match_all('/[aeiou]/', $lowercaseString);


        $reversedString = strrev($string);

        echo "Original String: " . $string . "\n";
        echo "Reversed String: " . $reversedString . "\n";
        echo "Number of Vowels: " . $vowelCount . "\n";
        echo "--------------------------\n";
    }
}

$strings = ["Hello", "World", "PHP", "Programming"];

processStrings($strings);


