<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
    

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
	
	
	
	<?php  

	/* 
	Étape 1 - Créer une base de données dans PHPmyadmin

	Étape 2 - Créez un tableau comme celui de la conférence

	Étape 3 - Insérez des données

	Étape 4 - Connectez-vous à la base de données et lisez les données 
	*/
	
	$mphp = new mysqli("localhost", "root","", "mphp");
	
	$mphp->query("INSERT INTO tablee (name, age, email, job) 
	VALUES('najia', '21', 'najia@gmail.com', 'developer')");
	

	$result = $mphp->query("SELECT * FROM tablee");

	$data = $result->fetch_array();

	echo $data['name']; 
	echo nl2br("\r\n");
	echo $data['age']; 
	echo nl2br("\r\n");
	echo $data['email']; 
	echo nl2br("\r\n");
	echo $data['job']; 



	


	// $data = $result->fetch_array();
	

	

	
	?>






 </article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>
