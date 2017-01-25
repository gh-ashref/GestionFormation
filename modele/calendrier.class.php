<?php
class calendrier extends functions
{
    private $id_calendrier;
	private $date_calendrier;
	private $heure_calendrier;
   
   
	    
    public function __construct($id_calendrier,$date_calendrier,$heure_calendrier){
        $this->id_calendrier=$id_calendrier;
        $this->date_calendrier=$date_calendrier;
        $this->heure_calendrier=$heure_calendrier;
		
	
    }
	
    //Ajout voiture
    public function add($cnx){
        $req=$cnx->prepare("insert into calendrier (date_calendrier,heure_calendrier) values(?,?)");
        $req->bindParam(1,$this->date_calendrier);
		$req->bindParam(2,$this->heure_calendrier);
		
	
		
		$req->execute();
		parent::redirect("index.php?controller=formateur&action=liste");
        }
		
	//liste voiture
    public function liste($cnx){
        $req=$cnx->query("select * from calendrier")->fetchAll(PDO::FETCH_OBJ);
		return $req;
        }
		
	//detail voiture
    public function detail($cnx){
        $req=$cnx->query("select * from calendrier where id_calendrier=".$this->id_calendrier)->fetch(PDO::FETCH_OBJ);
		return $req;
        }
		
	//Modif voiture
	public function edit($cnx){
	$req=$cnx->query("select * from calendrier where id_calendrier=".$this->id_calendrier);
	$v=$req->fetch(PDO::FETCH_ASSOC);
	



      $req=$cnx->prepare("update calendrier set date_calendrier=?, heure_calendrier=?");
      
	 $req->bindParam(1,$this->date_calendrier);
		$req->bindParam(2,$this->heure_calendrier);
		
		$req->execute();
		parent::redirect("index.php?controller=apprenant&action=liste");
        }
	

    public function etat($cnx,$datedb,$datefn){

        $req=$cnx->query("select * from calendrier where date_echeance between '".$datedb."'and'".$datefn."'")->fetchAll(PDO::FETCH_OBJ);
		return $req;
        }

	//Delete 
    public function delete($cnx){
	$req=$cnx->query("select * from calendrier where id_calendrier=".$this->id_calendrier);
	$v=$req->fetch(PDO::FETCH_ASSOC);
	
        $req=$cnx->exec("delete from calendrier where id_calendrier='".$this->id_calendrier."'");
		parent::redirect("index.php?controller=apprenant&action=liste");
		}
    } //fin class



?>