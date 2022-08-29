<?php
$str = "This 'is' <b>bold</b>";
echo $str . '<br>';
$newStr = htmlentities($str, ENT_QUOTES); // ENT_NOQUOTES, ENT_COMPAT are others values
echo html_entity_decode($newStr);
// echo htmlspecialchars($str, ENT_NOQUOTES);
// echo htmlspecialchars_decode($str, ENT_NOQUOTES);
// echo "<pre>";
print_r(get_html_translation_table(HTML_ENTITIES)); //HTML_SPECIALCHARS OTHER OPTION
echo "<pre>";