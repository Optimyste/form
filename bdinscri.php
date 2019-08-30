<?php
session_start();
$error=null;
$succes="";
?>
<?php
	// Création du DSN
	$dsn = 'mysql:host=localhost;dbname=bsoft;port=3306;charset=utf8';
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $age = htmlspecialchars($_POST['age']);
    $sexe = htmlspecialchars($_POST['sexe']);
    $profession = htmlspecialchars($_POST['profession']);
    $tels = str_replace(' ','',htmlspecialchars($_POST['tel']));
    $mail = htmlspecialchars($_POST['maile']);
   
    $chek=$_POST['chek'];
	// Création et test de la connexion
	try 
		{		 
			$pdo = new PDO($dsn, 'root' , '');
            $connexion = $pdo;
            
            //  Récupération de l'utilisateur 
            $req = $connexion->prepare('SELECT id, tel FROM participant WHERE tel = :tel');
            $req->execute(array(
                'tel' => $tels));
            $resultat = $req->fetch();

            if($age<16||$age>80)
            {
                $error =  'Vous n\'êtes pas autorisé à vous inscrire sur cette plateforme. Votre age n\'est pas dans l\'intervalle!';
                $_SESSION['error'] = $error;
                header("Location:inscription.php");
                exit();
            }
            elseif(!(preg_match("#^([0-9]{8})$#", $tels)))
            {
                $error =  'Le format de votre numero est incorrecte !';
                $_SESSION['error'] = $error;
                header("Location:inscription.php");
                exit();
            }
            elseif ($resultat)
            {
                $error =  'Ce numero existe déjà  !';
                $_SESSION['error'] = $error;
                header("Location:inscription.php");
                exit();
            }
            elseif(!$chek)
            {
                $error =  'Il faut accepter nos conditions d\'utilisation avant de pouvoir vous inscrire!';
                $_SESSION['error'] = $error;
                header("Location:inscription.php");
                exit();
            }
            else
            {
                $requette = $connexion->prepare("
                    INSERT INTO participant(nom,prenom,age,sexe,profession,tel,mail)
                    VALUES(:nom,:prenom,:age,:sexe,:profession,:tel,:mail)
                ");
              
                $requette->execute(
                    [
                        "nom" => $nom,
                        "prenom" => $prenom,
                        "age" => (int) $age,
                        "sexe" => $sexe,
                        "profession" => $profession,
                        "tel" => (int) $tels,
                        "mail" => $mail
                    ]
                );
                $_SESSION['id'] = $resultat['id'];
                $_SESSION['fullname'] = $nom.' '.$prenom;
                $success =  ' Bienvenue '.$_SESSION['fullname'];
                $_SESSION['is_ok'] = $success;

                header("location:bienvenu.php"); 
            }
		}

	catch (PDOException $exception) 
		{		 
			mail('burkinasoftware@yahoo.com', 'PDOException', $exception->getMessage());
			exit('Erreur de connexion à la base de données');		
		}			
?>