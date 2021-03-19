<?php 

class Commentaire {
    private $db = null;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=tp1_bdd','root','toor');
    }

    public function affichageCommentaire() {
        $sql = $this->db->query("SELECT * FROM commentaire ORDER BY `date_com` AND `auteur_com` ASC");
  
        if($sql) {
            while($row = $sql->fetch(PDO::FETCH_OBJ)) {
                echo"
                    <div class='d-flex justify-content-center'>
                        <div class='card' style='width: 50rem'>
                            <form methode='POST'>
                            <h5 class='card-title'> Commentaire </h5>

                            <h5 class='card-title'> Titre : $row->auteur_com</h5>
                             <h7>Date <h7>: $row->date_com</p>

                            <h6 class='card-subtitle mb-2 text-mutedx '>Commentaire :</h6>$row->commentaire
   
                            <form>
                        </div>
                    </div>
                
                
                
                ";
            }
        }else {
            echo "not working !!!";
        }
    }


    
    public function creationCommentaire($auteur,$mail,$commentaire) {
        $sql = $this->db->prepare("INSERT INTO commentaire(date_com,auteur_com,mail_auteur,commentaire) VALUES (now(),:auteur_com,:mail_auteur,:commentaire)");
        $sql -> bindParam(":auteur_com", $_POST["auteur_com"]);
        $sql ->bindParam(":mail_auteur", $_POST["mail_auteur"]);
        $sql ->bindParam(":commentaire", $_POST["commentaire"]);

        return $sql->execute();
    }
}

?>