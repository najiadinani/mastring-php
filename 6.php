
<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
 

 
  





<html>
<body>

<!-- Étape 1: Créez un formulaire qui soumet une seule valeur à POST (super global) -->
<form action="forms.php" method="post">
Message: <input type="text"  placeholder ="write your message here ! " name=" message">
<input type="submit">
</form>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST['fname'];
	if (empty($name)) {
	  echo "Name is empty";
	} else {
	  echo $name;
	}
  }
  ?>





</body>
</html>
	



</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>