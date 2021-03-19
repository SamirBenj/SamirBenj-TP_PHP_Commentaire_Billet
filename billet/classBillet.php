<?php


class Billet {
private $db = null;

    public function __construct() {
     $this->db = new PDO('mysql:host=localhost;dbname=tp1_bdd','root','toor');
    //$this->db = new PDO("pgsql:user=root dbname=tp1_bdd host=localhost password=toor");

    }    
  
       
    
    public function getBillets() {
        $test = $this->db->query("SELECT * FROM billet ORDER BY `Date_bil` DESC");
        include_once '../commentaires/classCommentaire.php';

        if($test) {        
            //echo "it work !\n\n";
            $compte =0;
            while($row = $test->fetch(PDO::FETCH_OBJ)){
            $compte++;
            echo "
            <div class='d-flex justify-content-center'> 
            <div class='card' style='width :18rem' > 
                <form method='POST'>
               
                <h5 class='card-title'> Titre : $row->Tittre_bil</h5>
                <h7>Date <h7>: $row->Date_bil</p>

                <h6 class='card-subtitle mb-2 text-mutedx   '>Contenue :</h6>$row->contenu
                    <!--<input type=submit value='supprimer le commentaire $compte'/><br></br>-->
                </form>
            </div>
            </div>              
            ";

            //$commentaire =new Commentaire();
            //$commentaire->affichageCommentaire();
            
        }

       
    }else{
            echo "not working !";
        }

    
    }

    //INSERT INTO billet(Date_bil,Tittre_bil,contenu) VALUES (now(),"Arhtur","2")
    public function creationBillet($titre,$contenu) {
        $sql = $this->db->prepare("INSERT INTO billet(Date_bil,Tittre_bil,contenu) VALUES (now(),:Tittre_bil,:contenu)");
        $sql ->bindParam(":Tittre_bil",$_POST["Tittre_bil"]);
        $sql ->bindParam(":contenu",$_POST["contenu"]);

        return $sql->execute();
    }

    
}


// public function deleteBillet($Id_bil) {
    
    //     if(isset($_POST['submit'])) { 
    //          $sql = $this->db->prepare("DELETE FROM billet WHERE Id_bil =");
    //          $sql->bindParam(":Id_bil",$Id_bil);
    //      return $sql->execute();

    //     }

    // action='".$this->deleteBillet(8)."'

    
?>
