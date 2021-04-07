<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  

Étape 1: Créez une condition facultatif avec if, elseif et else pour enfin afficher la chaîne en disant, "I love greenchip :p"

Étape 2: Créez un forloop qui affiche 10 nombres

Étape 3: Créez une instruction switch qui teste à nouveau une condition avec 5 cas 

 */

echo " <h4>Étape 1:</h4> ";

$name = "DINA";

if ($name == "NAJIA") {
	echo "hello $name";
} elseif ($name == "WIAM") {
	echo "hello $name";
} else {
	echo "I love Greenchip :p";
}

echo " <h4>Étape 2 :</h4> ";


for ($number= 1 ; $number <= 10; $number++) {
  echo "$number <br>";
}

echo " <h4>Étape 3 :</h4> ";


$favlang = "Spanish";

switch ($favlang) {
  case "Spanish":
    echo "Your favorite language is Spanish!";
    break;
  case "English":
    echo "Your favorite language  is English!";
    break;
  case "FRENSH":
    echo "Your favorite language is FRENSH!";
    break;
	case "ARABIC":
		echo "Your favorite language is ARABIC!";
		break;

  default:
    echo "Your favorite language is neither spanish, english, nor frensh!";
}







	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>