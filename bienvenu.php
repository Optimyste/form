<?php
	session_start();
	$succes = isset($_SESSION['is_ok'])? $_SESSION['is_ok'] : null;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="inscri.css">
	<link rel="stylesheet" href="css_boostrap.css">
	<link rel="stylesheet" href="css_font.css">
	<link rel="shortcut icon" href="gt_favicon.png">
	<title>Burkina Software</title>
</head>
<body>
<div class="formulaire">
    <form action="bdinscri.php" method="post">
		<?php if(!is_null($succes)) : ?>
            <div class="alert alert-success">
                <?= $succes ?>
            </div>
	    <?php endif ?>
	    <p class="texacc">Votre inscription a été prise en compte.</p>
	    <p class="texacc">Lieu de la formation: <div style="font-size: 18px; color: red;">KeoLid(1er etage) au Centre Commercial Ouaga 2000</div>.</p>
	    <p class="texacc"><div style="font-size: 18px; color: red;">Attention:</div>Pour valider votre inscription, vous devez envoyez le 1/3 du prix de la formation soit(5000FCFA) a un de ces numeros: <div style="color: orange;">+226 77709392 ou +226 01009800</div> <div style="color: blue;"> Au plutard le 03 Septembre</div>Vous recevrez immediatement un SMS validant votre inscription.</p>
	    <br/>
	    <br/>
<div class="text-center mt-5" style="margin-top: 30px!important">Copyright B-SOFT2019 </div>
</div>

<?php
	unset($_SESSION['is_ok']);
?>
</body>
</html>      