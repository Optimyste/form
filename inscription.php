<?php
	session_start();
	$error = isset($_SESSION['error'])? $_SESSION['error'] : null;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="inscri.css">
	<link rel="stylesheet" href="css_boostrap.css">
	<link rel="stylesheet" href="css_font.css">
	<title>Burkina Software</title>
</head>
<body>
<div class="formulaire">
    <form action="bdinscri.php" method="post">
		<h2>Burkina-Software</h2>
		<p class="hint-text">Bienvenue sur la page d'inscription de la FORMATION ACCESS 2019.</p>

		<?php if(!is_null($error)) : ?>
				<div class="alert alert-danger">
					<?= $error ?>
				</div>
		<?php endif ?>
		
		<div class="form-group">
        	<input type="text" class="form-control" name="nom" placeholder="Nom" required="">
        </div>
        <div class="form-group">
        	<input type="text" class="form-control" name="prenom" placeholder="Prénom" required="">
        </div>
        <div class="form-group">
			<div class="row">
				<div class="col-xs-6">
					<input type="number" class="form-control" name="age" placeholder="age" required="">
				</div>
				<div class="col-xs-6">
					<select name="sexe" type="text" class="form-control" required="">
						<option value="Male">Masculin</option>
						<option value="Feminin">Féminin</option>
					</select>
				</div>
			</div>        	
        </div>
        <div class="form-group">
        	<select name="profession" type="text" class="form-control" placeholder="profession" required="">
					<option value="eleve">Elève</option>
					<option value="etudiant">Etudiant</option>
					<option value="Fonctionnaire">Fonctionnaire</option>
					<option value="autre">Autre</option>
			</select>
        </div>
		<div class="form-group">
            <input type="number" class="form-control" name="tel" placeholder="+226" required="">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="maile" placeholder="E-mail" required="">
        </div>       
        <div class="form-group">
			<label class="checkbox-inline"><input type="checkbox" name="chek" value="true"> J'accèpte les Conditions d'utilisations &amp; La licence</label>
		</div>
		<div class="form-group">
		<button class="btn btn-success btn-lg btn-block" type="submit">S'inscrire maintenant</button>
        </div>
    </form>
	<div class="text-center">Copyright B-SOFT2019 <a href="index.php" style="text-decoration: none; color: black; margin: 10px;">Acceuil</a></div>
	<?php
	
	 unset($_SESSION['error']);
	?>
</div>
</body>
</html>                            