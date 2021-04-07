<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


/*  
	Étape 1: utilisez une fonction mathématique prédéfinie ici et faites-en écho

	Étape 2: utilisez une fonction de chaîne prédéfinie ici et faites-en écho

	Étape 3: Utilisez une fonction Array prédéfinie ici et faites-en écho 

 */
echo " <h4>Étape 1 :</h4> ";
    function mathématique($num1 , $num2 , $num3){
		$result = $num1 / $num2 + $num3;
		echo " the result is : $result "; 
	}
	echo mathématique( 10 , 5 , 6 );

echo " <h4>Étape 2 :</h4> ";

function chain($name1 , $name2 , $name3){
	echo "the names are : $name1 - $name2 - $name3";
}
echo chain("NAJIA" , "WIAM" , "RAZAN");


echo " <h2>Étape 3:</h2> ";
		function arr(){
			$arr = array("Najia" , "Dinani" , "21");
			foreach ( $arr as $keys => $values){
				echo " $values <br /> ";
			} 
		}
		echo arr();








	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>