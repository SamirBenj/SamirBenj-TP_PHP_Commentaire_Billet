<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css" >
    <title>Affichage des billets</title>
</head>
<body>
    <h1 style="text-align:center">Affichage des billets(ranger par date)</h1>
    <?php 

if($_SERVER['REQUEST_METHOD'] === "GET") {
    include_once "./classBillet.php";

    $billet= new Billet();

    if($billet->getBillets()){
        echo "<div class='salut'> <h4>Affichade des billets reussi !<h4><a href=\"..\index.php\"><-Retour au panel</a></div>";

    }else {
        echo "Une erreur est survenue ";
        
        echo "<div class='salut'> <a href=\"..\index.php\"><-Retour au panel</a></div>";
        
        exit();
    }
    
}



 ?>

</body>
</html>
