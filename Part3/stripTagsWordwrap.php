<?php
$str = "Hello <b>World</b> <i>Italic</i>";
echo strip_tags($str, "<b>");

$str = "Hello My name is Harsharora";
echo wordwrap($str, 0, "<br>", false)
?>