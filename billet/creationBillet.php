<?php 

if($_SERVER['REQUEST_METHOD'] === "POST") {
    include_once "classBillet.php";

    $billet= new Billet();

    if($billet->creationBillet($_POST["Tittre_bil"],$_POST["contenu"])){
        echo "<div class='salut'><h4>le billet est bien crée !</h4>
        <a href=\"../index.php\"><-Retour au Menu</a></div>";
        echo "";

    }else {
        echo "Une erreur est survenue ";
        echo "<a href=\"index.php\"><-Retour au panel</a>";
        exit();
    }
}?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../style.css" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<title>Creer un billet</title>
</head>
<body>


<h1 style="text-align: center;">Creer un billet</h1>
    <div class="d-flex justify-content-center">
        <div class="form-group" style="width: 250px;">
        <form method="POST">
            <td>Titre :</td>
            <input type="text" class="form-control"name="Tittre_bil" ><br></br>
            <td>Contenu :   </td><br>
            <textarea type="text" name="contenu"></textarea>
            <br></br>
            <input class="btn btn-primary" type="submit" name="submit" value="Poster">
        </form>
        </div>
    </div>


</body>
</html>