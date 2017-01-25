<?php
class calendrier_groupe extends functions
{
    private $id_groupe;
	private $id_calendrier;
	private $id_calendrier_groupe;
   
   
	    
    public function __construct($id_groupe,$id_calendrier,$id_calendrier_groupe){
        $this->id_groupe=$id_groupe;
        $this->id_calendrier=$id_calendrier;
        $this->id_calendrier_groupe=$id_calendrier_groupe;
		
	
    }
	
    //Ajout voiture
    public function add($cnx){
        $req=$cnx->prepare("insert into calendrier_groupe (id_groupe,id_calendrier,id_calendrier_groupe) values(?,?,?)");
        $req->bindParam(1,$this->id_groupe);
		$req->bindParam(2,$this->id_calendrier);
		$req->bindParam(3,$this->id_calendrier_groupe);
		
	
		
		$req->execute();
		parent::redirect("index.php?controller=formateur&action=liste");
        }
		
	//liste voiture
    public function liste($cnx){
        $req=$cnx->query("select * from calendrier_groupe")->fetchAll(PDO::FETCH_OBJ);
		return $req;
        }
		
	//detail voiture
    public function detail($cnx){
        $req=$cnx->query("select * from calendrier_groupe where id_groupe=".$this->id_groupe)->fetch(PDO::FETCH_OBJ);
		return $req;
        }
		
	//Modif voiture
	public function edit($cnx){
	$req=$cnx->query("select * from calendrier_groupe where id_groupe=".$this->id_groupe);
	$v=$req->fetch(PDO::FETCH_ASSOC);
	



      $req=$cnx->prepare("update calendrier_groupe set id_calendrier=?, id_calendrier_groupe=?");
      
	 $req->bindParam(1,$this->id_calendrier);
		$req->bindParam(2,$this->id_calendrier_groupe);
		
		$req->execute();
		parent::redirect("index.php?controller=apprenant&action=liste");
        }
	

    public function etat($cnx,$datedb,$datefn){

        $req=$cnx->query("select * from calendrier_groupe where date_echeance between '".$datedb."'and'".$datefn."'")->fetchAll(PDO::FETCH_OBJ);
		return $req;
        }

	//Delete 
    public function delete($cnx){
	$req=$cnx->query("select * from calendrier_groupe where id_groupe=".$this->id_groupe);
	$v=$req->fetch(PDO::FETCH_ASSOC);
	
        $req=$cnx->exec("delete from calendrier_groupe where id_groupe='".$this->id_groupe."'");
		parent::redirect("index.php?controller=apprenant&action=liste");
		}
    } //fin class



?>