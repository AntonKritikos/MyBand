<?php
$result = $mysqli->query("SELECT * FROM newsarticles WHERE title LIKE '%$searchval%' OR content LIKE '%$searchval%' OR content2 LIKE '%$searchval%' OR content3 LIKE '%$searchval%' OR content4 LIKE '%$searchval%'");
$row = $mysqli->query("SELECT COUNT(*) AS searched FROM newsarticles WHERE title LIKE '%$searchval%' OR content LIKE '%$searchval%' OR content2 LIKE '%$searchval%' OR content3 LIKE '%$searchval%' OR content4 LIKE '%$searchval%'");
$temp = $row->fetch_assoc();
$searched = $temp['searched'];
 ?>
