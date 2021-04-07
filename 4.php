<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php  

/*  
	Étape 1: Définir une fonction et qui renvoie un calcul de 2 nombres

	Étape 2: Créez une fonction qui transmet des paramètres et appelez-la à l'aide de valeurs de paramètres

 */

echo " <h4>Étape 1 :</h4> ";
  
function sum(int $x, int $y) {
	$z = $x + $y;
	return $z;
  }
  
  echo " 3 + 1 = " . sum(3, 1) . "<br>";

  echo " <h4>Étape 2 :</h4> ";
  


	
?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php" ?>