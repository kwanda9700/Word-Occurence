<?php

function wordOccurence($str, $word) {
    $str_toLower = strtolower($str);
    $word_toLower = strtolower($word);
    $word_occurence = substr_count($str_toLower, $word_toLower);
    return $word_occurence;
}
$str = "Hello This is a test by looking for how many word occurences that are in this. Hello I looking for how many word occurences that are in this";
$word = "This";
$num = wordOccurence($str, $word);
echo "The word " . $word . " occures " . $num . " times"
?>