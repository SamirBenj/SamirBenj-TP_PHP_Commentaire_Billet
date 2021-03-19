<?php


if($_SERVER['REQUEST_METHOD'] === "POST") {
    include_once "classCommentaire.php";

    $commentaire= new Commentaire();

    if($commentaire->creationCommentaire($_POST["auteur_com"],$_POST["mail_auteur"], $_POST['commentaire'])){
        echo "";
        echo "<div class='salut'> <h4>le commentaire est bien   crée !<h4>
        <a href=\"..\index.php\"><-Retour au Menu</a></div>";

    }else {
        echo "Une erreur est survenue ";
        
        echo "<div class='salut'> <a href=\"..\index.php\"><-Retour au panel</a></div>";
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Creation des commentaires</title>
</head>
<body>
    

<h1 style="text-align: center;">Creer un commentaire</h1>
<!--<form action="Page1.php" method="POST">---->
    <div class="d-flex justify-content-center">
    <div class="form-group" style="width: 250px;">
    <form method="POST">
    <td>Auteur :</td>
    <input type="text" class="form-control"name="auteur_com" ><br></br>
    <td>mail :</td>
    <input type="text" class="form-control"name="mail_auteur" ><br></br>
    <td>Commentaire :   </td><br>
    <textarea type="text" name="commentaire"></textarea>
    <br></br>
    <input type="submit" name="submit" value="Poster">
</form>
</div>
</div>

</body>
</html>