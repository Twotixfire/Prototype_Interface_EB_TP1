<?php
    $listeCommenditaires=array("Decathlon", "RedBull", "Giant", "Specialized", "Monster", "Scott");
    $listesOffresCommenditaires=array("0,71$", "0,53$", "0,57$", "0,36$", "0,51$", "0,47$");
    $listesOffresSpéciales=array(
        "Offre spécial du commanditaire : <br><br> 400$ d'achats chez Decathlon",
        "Offre spécial du commanditaire : <br><br> Vélo personalisé d'une valeur de 3000$, avec logo du commenditaire.",
        "Offre spécial du commenditaire : <br><br> Crédit de 1000$ sur le site du commenditaire",
        "Offre spécial du commenditaire : <br><br> Crédit de 5500$ en composantes de vélo",
        "Offre spécial du commenditaire : <br><br> Boisson énergisante à vie de Monster Energy",
        "Offre spécial du commenditaire : <br><br> Crédit de 3000$ en composantes de vélo"
    )
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profits sur pédales</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1><img src="images/logo_profitssurpedale.png" alt="" height="69px" width="80px">Profits sur pédales</h1>
    </header>
    <nav>
        <a href="index.html" class="separateur">Accueil</a>
        <a href="services.php" class="separateur">Nos services</a>
        <a href="commenditaires.php" class="separateur">Commenditaires</a>
        <a href="contenuIndisponible.php"class="separateur">Tableau de bord</a>
        <a href="connexion.php">Connexion</a>
    </nav>
    <main>
        <?php
            $numeroConteneurFlex = 3;
            $flexItemParConteneur = 2;
            $compteurCommenditaire = 0;

            for ($j=0 ; $j < 3; $j++) {
                $compteurFlexItem = 0;
                echo "<div class=\"ficheCommenditaire\">";
                
                for ($i=$compteurCommenditaire; $i < sizeof($listeCommenditaires); $i++) {
                    if ($compteurFlexItem < $flexItemParConteneur) {
                        $compteurFlexItem ++;
                        $compteurCommenditaire ++;
                        $logo = "";
                        $logo = "images/$listeCommenditaires[$i].png";
                        echo "
                        <div class=\"resumeCommenditaire\">
                            <img src=$logo alt=\"$listeCommenditaires[$i]\" class=\"image-logo\">
                            
                            <p>Revenus au kilomètre : $listesOffresCommenditaires[$i]<br>
                            <br>
                            $listesOffresSpéciales[$i]
                            </p>
                            <br>
                        </div>
                        ";
                        
                    }
                    else 
                        break 1;
                }
                echo "</div>";
            }

            // require_once __DIR__.'/bd/bdprofitsurpedale.include.php';
            // $connexion = new PDO("mysql:dbname=".BDSCHEMA.";host=".BDSERVEUR,BDUTILISATEURLIRE,BDMDP);
            // // $connexion = new PDO("mysql:dbname=".BDSCHEMA.";host=127.0.0.1;",".BDUTILISATEURLIRE.",".BDMDP");
            // $requete = $connexion->prepare("SELECT * FROM Commenditaire");

            // // La requête contient une variable qui est affecté ici
            // // $requete->bindValue(":id",3, PDO::PARAM_INT);

            // $requete->execute();
            // $testCommendiatire = $requete->fetchAll(PDO::FETCH_OBJ);
            // var_dump($testCommendiatire);
            // //echo $testCommendiatire[0]->nom;
        ?>
    </main>
    <footer>
        <p>© 2025 Tous droits réservés.</p>
    </footer>
</body>
</html>