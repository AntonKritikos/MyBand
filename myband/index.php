<script type="text/javascript" src='js/jquery-2.1.4.min.js'></script>
<link rel='stylesheet' href='css/lightbox.css'>
<?php
// Gebruikersnaam, wachtwoord van de database etc ophalen
require 'includes/config.php' ;
// Laad de Smarty bibliotheek in
require_once 'libs/smarty/Smarty.class.php';
// Voer instellingen uit en stel template parser in
require 'includes/bootstrap.php' ;
// Maak de database connectie
require_once 'includes/database.php' ;

// Koppel de waarde van de paginatitel aan te smarty tag 'title'
$templateParser->assign('title', "Tom Clancys Ghost Recon Wildlands");
// Toon de template: output html
$templateParser->display('head.tpl');

$page = isset($_GET['page']) ? $_GET['page'] : "Home";
$templateParser->assign('location',$page);
$templateParser->display('header.tpl');
$templateParser->assign('background',$page);
$templateParser->display('background.tpl');
switch ($page)
{
	case "Home":
		$templateParser->display('nav.tpl');
	break;
	case 'News':
		$number = isset($_GET['number']) ? $_GET['number'] : 1;
		$templateParser->assign('page',$number);
		$templateParser->display('showloc.tpl');
		require 'logic/select_pages.php';
		$templateParser->assign('pages',$Pages);
		require 'logic/select_newsarticles.php';
		$templateParser->assign('result',$result);
		$templateParser->assign('page',$page);
		$templateParser->display('newsarticles.tpl');
	break;
	case 'Overview':
		$templateParser->display('overview.tpl');
	break;
	case 'Trailer':
		?>
		<script type='text/javascript' src='js/main.js'></script>
		<?php
		$templateParser->display('scheme.tpl');
	break;
	case 'Search':
		$templateParser->display('search.tpl');
		if (isset($_POST['submit'])) {
			$searchval = $_POST['searchval'];
			require 'logic/search.php';
			$templateParser->assign('searched',$searched);
			$templateParser->assign('searchval',$searchval);
			$templateParser->assign('result',$result);
			$templateParser->assign('page',$page);
			$templateParser->display('searchres.tpl');
		}
	break;
	case "Awards":
		require_once 'logic/awards.php';
		$templateParser->assign('result',$result);
		$templateParser->display('awards.tpl');
	break;
	case "Interview":
		require "logic/interview.php";
		$templateParser->assign('result',$result);
		$templateParser->display('interview.tpl');
	break;
	default:
}
$templateParser->display('footer.tpl');
?>
<script src='js/lightbox.js'></script>
<link rel='stylesheet' href='css/main.css'>