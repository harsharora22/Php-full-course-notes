<?php
// echo file_put_contents("readme.txt", "\nappended text", FILE_APPEND | LOCK_EX);
echo file_get_contents("readme.txt", false, null, 0, 40);