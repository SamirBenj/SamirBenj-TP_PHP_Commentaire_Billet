<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css" >
    <title>Affichage des comentaires</title>
</head>
<body>
        <h1 style="text-align:center">Affichage des comentaires(ranger par date/Auteur)</h1>
        <?php 

        if($_SERVER['REQUEST_METHOD'] === "GET") {
            include_once "classCommentaire.php";

            $commentaire = new Commentaire();

            if($commentaire-> affichageCommentaire()) {
                echo "Affichage reussi !";
                
            }else {
                echo"affichage non reussi !";
                echo "<a href=\"..\index.php\"><-Retour au panel</a>";
                exit();
            }
        }
?>
</body>
</html>