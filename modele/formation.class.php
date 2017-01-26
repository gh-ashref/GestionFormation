<?php
class formation extends functions
{
    private $id_formation;
	private $titre_formation;
	private $description_formation;
   
   
	    
    public function __construct($id_formation,$titre_formation,$description_formation){
        $this->id_formation=$id_formation;
        $this->titre_formation=$titre_formation;
        $this->description_formation=$description_formation;
		
	
    }
	
    //Ajout voiture
    public function add($cnx){
    	
        $req=$cnx->prepare("insert into formation (titre_formation,description_formation) values(?,?)");
        $req->bindParam(1,$this->titre_formation);
		$req->bindParam(2,$this->description_formation);
		
	
		
		$req->execute();
		parent::redirect("index.php?controller=formation&action=liste");
        }
		
	//liste voiture
    public function liste($cnx){
        $req=$cnx->query("select * from formation")->fetchAll(PDO::FETCH_OBJ);
		return $req;
        }
		
	//detail voiture
    public function detail($cnx){
        $req=$cnx->query("select * from formation where id_formation=".$this->id_formation)->fetch(PDO::FETCH_OBJ);
		return $req;
        }
		
	//Modif voiture
	public function edit($cnx){
	$req=$cnx->query("select * from formation where id_formation=".$this->id_formation);
	$v=$req->fetch(PDO::FETCH_ASSOC);
	



      $req=$cnx->prepare("update formation set titre_formation=?, description_formation=?");
      
	 $req->bindParam(1,$this->titre_formation);
		$req->bindParam(2,$this->description_formation);
		
		$req->execute();
		parent::redirect("index.php?controller=apprenant&action=liste");
        }
	

    public function etat($cnx,$datedb,$datefn){

        $req=$cnx->query("select * from formation where date_echeance between '".$datedb."'and'".$datefn."'")->fetchAll(PDO::FETCH_OBJ);
		return $req;
        }

	//Delete 
    public function delete($cnx){
	$req=$cnx->query("select * from formation where id_formation=".$this->id_formation);
	$v=$req->fetch(PDO::FETCH_ASSOC);
	
        $req=$cnx->exec("delete from formation where id_formation='".$this->id_formation."'");
		parent::redirect("index.php?controller=apprenant&action=liste");
		}
    } //fin class



?>