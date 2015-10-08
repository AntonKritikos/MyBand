<?php 
// In dit bestand vind je alle instellingen, zoals databasegegevens.

// Voor de veiligheid zou dit bestand boven de webroot geplaatst moeten worden. 

// Definieer de status van het project
define('PROJECT_STATUS','development');

// Stel de instellingen in op Nederlands
setlocale(LC_ALL, 'nl_NL');

// databasegegevens
define('DB_HOST','127.0.0.1');
define('DB_NAME','c9');
define('DB_USERNAME','etherealz');
define('DB_PASSWORD','');
define('DB_PORT',3306);

define('MAXITEMS',4);
?>
