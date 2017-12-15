<?php
$host= "localhost";
$user= "root";
$mdp="";
$db= "db_codeuse";
$link=mysqli_connect($host,$user,$mdp);
mysqli_select_db($link,$db);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
   	<link href="css/bootstrap.css" rel="stylesheet">
   	<link href="css/style.css" rel="stylesheet">
	<title> Formulaire</title>
</head>
<body>
	<div class="container">
	<form action="" name="form1" method="Post">
		<div class="col-sm-offset-1 col-sm-5 form-line"">
			<h1>FORMULAIRE</h1>
			<div class="form-group">
				<label for="exampleInputUsername">Nom:</label><br>
				<input type="text" name="nom" value="" class="form-control" placeholder=" Entrer le nom "><br>
			</div>
			<div class="form-group">
				<label for="exampleInputUsername">Prénom(s)</label><br>
				<input type="text" name="prenom" value="" class="form-control" placeholder=" Entrer le(s) prénom(s) "><br>
			</div>
			<div class="form-group">
				<label for="telephone">N° Téléphone</label><br>
				<input type="text" name="tel" value="" class="form-control" id="telephone" placeholder=" Entrer 8 caractères pour N° de téléphone"><br>
			</div>
			<div class="form-group">
				<label for="exampleInputEmail">Email</label><br>
				<input type="text" name="email" value="" class="form-control" placeholder=" Email "><br>
			</div>
			<div class="form-group">
				<label for ="description"> Description</label><br>
				<textarea name="description" class="form-control" placeholder="Décrivez-vous en quelques lignes"></textarea><br>
			</div>
			<div class="form-group">
			<input type="submit" name="submit" value="Enregistrer" class="btn-primary text-center">
			</div>
	</form>
	</div>
	</div>
	<?php
	if (isset($_POST["submit"])) {
		# code...
		/*echo $_POST ["nom"].'<br>';
		echo $_POST ["prenom"].'<br>';
		echo $_POST ["tel"].'<br>';
		echo $_POST ["email"].'<br>';
		echo $_POST ["description"].'<br>';
		die();*/
		$sql="INSERT INTO codeuses (nom,prenom,tel,adresse,description) VALUES('".$_POST ["nom"]."',
			'".$_POST ["prenom"]."',
			'".$_POST ["tel"]."',
			'".$_POST ["email"]."',
			'".$_POST ["description"]."')";
		$result=mysqli_query($link,$sql);
		if ($result){
			echo "insertion reussie";
		}else{
			echo mysqli_error($link);
			die();
		}
	}
	?>
</body>
</html>