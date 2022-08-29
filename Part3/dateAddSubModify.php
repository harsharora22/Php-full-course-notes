<?php
$date = date_create("2006-02-11");
// date_add($date, date_interval_create_from_date_string("10 days"));
date_sub($date, date_interval_create_from_date_string("10 days"));
// date_modify($date, "-16 days");
var_dump($date);