<?php
class groupe extends functions
{
    private $id_groupe;
	private $frais_formation;
	private $nombre_heure_formation;
    private $date_debut_formation;
    private $date_fin_formation;
    private $id_formation;
	private $id_formateur;

	    
    public function __construct($id_groupe,$frais_formation,$nombre_heure_formation,$date_debut_formation,$date_fin_formation,$id_formation,$id_formateur){
        $this->id_groupe=$id_groupe;
        $this->frais_formation=$frais_formation;
        $this->nombre_heure_formation=$nombre_heure_formation;
		$this->date_debut_formation=$date_debut_formation;
		$this->date_fin_formation=$date_fin_formation;
		$this->id_formation=$id_formation;
		$this->id_formateur=$id_formateur;
		
		
    }
	
    //Ajout voiture
    public function add($cnx){
    	echo $frais_formation;

        $req=$cnx->prepare("insert into groupe (frais_formation,nombre_heure_formation,date_debut_formation,date_fin_formation,id_formation,id_formateur) values(,?,?,?,?,?,?)");
        $req->bindParam(1,$this->frais_formation);
		$req->bindParam(2,$this->nombre_heure_formation);
		$req->bindParam(3,$this->date_debut_formation);
		$req->bindParam(4,$this->date_fin_formation);
		$req->bindParam(5,$this->id_formation);
		$req->bindParam(6,$this->id_formateur);
		
		
		$req->execute();
		
		//parent::redirect("index.php?controller=groupe&action=liste");
        }
		
	//liste voiture
    public function liste($cnx){
        $req=$cnx->query("select * from groupe")->fetchAll(PDO::FETCH_OBJ);
		return $req;
        }
		
	//detail voiture
    public function detail($cnx){
        $req=$cnx->query("select * from groupe where id_groupe=".$this->id_groupe)->fetch(PDO::FETCH_OBJ);
		return $req;
        }
		
	//Modif voiture
	public function edit($cnx){
	$req=$cnx->query("select * from groupe where id_groupe=".$this->id_groupe);
	$v=$req->fetch(PDO::FETCH_ASSOC);
	



      $req=$cnx->prepare("update groupe set frais_formation=?, nombre_heure_formation=?, date_debut_formation=?, date_fin_formation=?,id_formation=?,id_formateur=? where id_groupe=?");
      
	  $req->bindParam(1,$this->frais_formation);
		$req->bindParam(2,$this->nombre_heure_formation);
		$req->bindParam(3,$this->date_debut_formation);
		$req->bindParam(4,$this->date_fin_formation);
		$req->bindParam(5,$this->id_formation);
		$req->bindParam(6,$this->id_formateur);
		
		$req->bindParam(7,$this->id_groupe);
		$req->execute();
		parent::redirect("index.php?controller=groupe&action=liste");
        }
	

    public function etat($cnx,$datedb,$datefn){

        $req=$cnx->query("select * from groupe where date_echeance between '".$datedb."'and'".$datefn."'")->fetchAll(PDO::FETCH_OBJ);
		return $req;
        }

	//Delete 
    public function delete($cnx){
	$req=$cnx->query("select * from groupe where id_groupe=".$this->id_groupe);
	$v=$req->fetch(PDO::FETCH_ASSOC);
	
        $req=$cnx->exec("delete from cheque where id_groupe='".$this->id_groupe."'");
		parent::redirect("index.php?controller=groupe&action=liste");
		}
    } //fin class



?>