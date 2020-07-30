<?php
$date=date_create("2020-01-01");
date_modify($date,"+15 days");
echo date_format($date,"Y-m-d");
?>