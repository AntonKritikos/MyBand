<?php
$offset = ($number-1)*MAXITEMS;
$result = $mysqli->query("SELECT * FROM newsarticles LIMIT ".$offset.", ".MAXITEMS);