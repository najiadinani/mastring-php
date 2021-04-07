<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">

	<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		<article class="main-content col-xs-8">
		


		<?php

		/* 
		Étape 1: Créez 2 variables appelées number1 et number2 et affecté au number1 la valeur 10 et le deuxième la valeur 20

		Étape 2: Ajoutez les deux variables et affichez la somme avec écho:

		Étape 3: Créez 2 tableaux avec les mêmes valeurs, l'un régulier et l'autre associatif

		Étape 4: Créez une constante et définissez-la sur la valeur de PHP. et utilisez un écho pour l'afficher


	
			 */


		?>
		<?php
		//etape 1
		echo ("<h2>ETAP 1</h2>");
		$number1= 10;
		$number2= 20;
		//Etape 2
		echo ("<h2>ETAP 2</h2>");
		$somme =$number1+$number2;
		      echo ( " la somme du 10+20 est : $somme");

        //etap3
		echo ("<h2>ETAP 3</h2>");
		$firstArray= ["Najia","Dinani","21"];
		$secondArray=["Prénom" => "Najia", "Nom" => "Dinani","Age"=> "21"];
		echo " <h4>Tableaux régulier :</h4> ";
		foreach ( $firstArray as $keys => $values){
			echo " $keys : $values <br /> ";
		}
		echo " <h4>Tableaux Associatif :</h4> ";
         
		foreach ($secondArray as $keys => $values){
			echo "$keys : $values <br /> ";
		
		}
		//ETAPE4
		echo " <h2>Étape 4:</h2> ";
			define ("welcome","Welcome to my page !");
			echo welcome ;


	
?>
		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>