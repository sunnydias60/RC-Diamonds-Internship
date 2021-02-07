<?php
$str= "asdf ghjk";
echo $str;
echo " ".strlen($str)." ".strpos($str,"asdf")." ".str_replace("ghjk", "qwerty", $str)." " .str_word_count($str) ." ". strrev($str);

?>