<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
			
	</aside><!--SIDEBAR-->

<article class="main-content col-xs-8">

	
	<?php  

	/*  
	Étape 1: Créez une classe appelée Chien

	Étape 2: Définissez certaines propriétés pour le Chien, l'exemple, la couleur des yeux, le nez ou la couleur de la fourrure

	Étape 4: Créez une méthode nommée AfficherTout qui fait écho à toutes les propriétés

	Étape 5: Instanciez la classe / créez l'objet et appelez-le pitbull

	Étape 6: Appelez la méthode AfficherTout
	
	*/
	


	class chien {
		public $name;
		public $type;
		public $color;
		public $eyescolor;


		function set_name($name){
			$this->name = $name;
		}

		function set_type($type){
			$this->type = $type;
		}

		function set_color($color){
			$this->color = $color;
		}
		
		function set_eyescolor($eyescolor){
			$this->eyescolor = $eyescolor;
		}

		function afficherTout(){
			echo $this->name;
			echo nl2br("\r\n");
			echo $this->type;
			echo nl2br("\r\n");
			echo $this->color;

			echo nl2br("\r\n");
			echo $this->eyescolor;
		}
	}

	$pitBull = new chien();

	$pitBull->set_name('ZUS');
	$pitBull->set_type('pitBull');
	$pitBull->set_color('Brown');
	$pitBull->set_eyescolor('black');


	$pitBull->afficherTout(); 
	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>