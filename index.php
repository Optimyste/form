<?php
	session_start();
	$succes = isset($_SESSION['is_ok'])? $_SESSION['is_ok'] : null;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="inscri.css">
	<link rel="stylesheet" href="css_boostrap.css">
	<link rel="stylesheet" href="css_font.css">
	<title>Burkina Software</title>
</head>
<body>
<div class="formulaire">
    <form action="inscription.php" method="post">
		<h2>B-SOFT</h2>
		<p class="hint-text">Bienvenue sur la page d'inscription de la formation Access 2019.</p>

		<?php if(!is_null($succes)) : ?>
            <div class="alert alert-success">
                <?= $succes ?>
            </div>
	    <?php endif ?>
        <div class="form-group">
        	<img style="width: 340px;" src="access.png">
        </div>
        <div class="form-group">

        </div>
        <div class="form-group">

        </div>
        <div class="form-group">

        </div>

        <div class="form-group">
			<button class="btn btn-success btn-lg btn-block"type="submit">Continuer</button>
        </div>

    </form>
		
	<div class="text-center">Copyright B-SOFT2019 </div>
</div>
<?php
	
	unset($_SESSION['is_ok']);
?>
</body>
</html>   