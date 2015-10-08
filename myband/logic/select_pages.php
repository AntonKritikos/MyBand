<?php
$result = $mysqli->query("SELECT COUNT(*) AS Pages FROM newsarticles");
$Row = $result->fetch_assoc();
$Pages = $Row["Pages"]/MAXITEMS;
$pages = ceil($Pages);
