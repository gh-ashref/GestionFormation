<?php
class salle extends functions
{
    private $id_salle;
	private $nom_salle;
	private $id_calendrier_groupe;
   
   
	    
    public function __construct($id_salle,$nom_salle,$id_calendrier_groupe){
        $this->id_salle=$id_salle;
        $this->nom_salle=$nom_salle;
        $this->id_calendrier_groupe=$id_calendrier_groupe;
		
	
    }
	
    //Ajout voiture
    public function add($cnx){
        $req=$cnx->prepare("insert into salle (nom_salle,id_calendrier_groupe) values(?,?)");
        $req->bindParam(1,$this->nom_salle);
		$req->bindParam(2,$this->id_calendrier_groupe);
		
	
		
		$req->execute();
		parent::redirect("index.php?controller=formateur&action=liste");
        }
		
	//liste voiture
    public function liste($cnx){
        $req=$cnx->query("select * from salle")->fetchAll(PDO::FETCH_OBJ);
		return $req;
        }
		
	//detail voiture
    public function detail($cnx){
        $req=$cnx->query("select * from salle where id_salle=".$this->id_salle)->fetch(PDO::FETCH_OBJ);
		return $req;
        }
		
	//Modif voiture
	public function edit($cnx){
	$req=$cnx->query("select * from salle where id_salle=".$this->id_salle);
	$v=$req->fetch(PDO::FETCH_ASSOC);
	



      $req=$cnx->prepare("update salle set nom_salle=?, id_calendrier_groupe=?");
      
	 $req->bindParam(1,$this->nom_salle);
		$req->bindParam(2,$this->id_calendrier_groupe);
		
		$req->execute();
		parent::redirect("index.php?controller=apprenant&action=liste");
        }
	

    public function etat($cnx,$datedb,$datefn){

        $req=$cnx->query("select * from salle where date_echeance between '".$datedb."'and'".$datefn."'")->fetchAll(PDO::FETCH_OBJ);
		return $req;
        }

	//Delete 
    public function delete($cnx){
	$req=$cnx->query("select * from salle where id_salle=".$this->id_salle);
	$v=$req->fetch(PDO::FETCH_ASSOC);
	
        $req=$cnx->exec("delete from salle where id_salle='".$this->id_salle."'");
		parent::redirect("index.php?controller=apprenant&action=liste");
		}
    } //fin class



?>