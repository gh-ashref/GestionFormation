<?php
class inscrire extends functions
{
    private $id_incrit;
	private $prix;
	private $remise;
    private $id_apprenant;
    private $id_groupe;
   
	    
    public function __construct($id_incrit,$prix,$remise,$id_apprenant,$id_groupe){
        $this->id_incrit=$id_incrit;
        $this->prix=$prix;
        $this->remise=$remise;
		$this->id_apprenant=$id_apprenant;
		$this->id_groupe=$id_groupe;
	
    }
	
    //Ajout voiture
    public function add($cnx){
        $req=$cnx->prepare("insert into inscrire (prix,remise,id_apprenant,id_groupe) values(?,?,?,?)");
        $req->bindParam(1,$this->prix);
		$req->bindParam(2,$this->remise);
		$req->bindParam(3,$this->id_apprenant);
		$req->bindParam(4,$this->id_groupe);
	
		
		$req->execute();
		parent::redirect("index.php?controller=formateur&action=liste");
        }
		
	//liste voiture
    public function liste($cnx){
        $req=$cnx->query("select * from inscrire")->fetchAll(PDO::FETCH_OBJ);
		return $req;
        }
       
	   
	    public function reglement($cnx,$id_apprenant){
        $req=$cnx->query("select * from inscrire i, groupe g,apprenant a,formation fr where  i.id_groupe=g.id_groupe and fr.id_formation=g.id_formation and i.id_apprenant=a.id_apprenant and i.id_apprenant=".$id_apprenant."")->fetchAll(PDO::FETCH_OBJ);
  		 
	  
		return $req;		  	
        }
		
	   
	    public function listefiltre($cnx,$dated,$datef){
        $req=$cnx->query("select * from inscrire i, groupe g,formateur f,formation fr where  i.id_groupe=g.id_groupe and fr.id_formation=g.id_formation and g.id_formateur=f.id_formateur and date_debut_formation between '".$dated."' and '".$datef."' ")->fetchAll(PDO::FETCH_OBJ);
  		return $req;		  	
        }
		public function listeetud($cnx,$id_groupe){
        $req=$cnx->query("select * from apprenant a, inscrire i where  a.id_apprenant=i.id_apprenant and i.id_groupe='".$id_groupe."' ")->fetchAll(PDO::FETCH_OBJ);
		return $req;
        }
		
		
	//detail voiture
    public function detail($cnx){
        $req=$cnx->query("select * from inscrire where id_incrit=".$this->id_incrit)->fetch(PDO::FETCH_OBJ);
		return $req;
        }


		
	//Modif voiture
	public function edit($cnx){
	$req=$cnx->query("select * from inscrire where id_incrit=".$this->id_incrit);
	$v=$req->fetch(PDO::FETCH_ASSOC);
	



      $req=$cnx->prepare("update inscrire set prix=?, remise=?, id_apprenant=?, id_groupe=? where id_incrit=?");
      
	 $req->bindParam(1,$this->prix);
		$req->bindParam(2,$this->remise);
		$req->bindParam(3,$this->id_apprenant);
		$req->bindParam(4,$this->id_groupe);
		$req->bindParam(5,$this->id_incrit);
		$req->execute();
		parent::redirect("index.php?controller=apprenant&action=liste");
        }
	

    public function etat($cnx,$datedb,$datefn){

        $req=$cnx->query("select * from apprenant where date_echeance between '".$datedb."'and'".$datefn."'")->fetchAll(PDO::FETCH_OBJ);
		return $req;
        }

	//Delete 
    public function delete($cnx){
	$req=$cnx->query("select * from inscrire where id_incrit=".$this->id_incrit);
	$v=$req->fetch(PDO::FETCH_ASSOC);
	
        $req=$cnx->exec("delete from inscrire where id_incrit='".$this->id_incrit."'");
		parent::redirect("index.php?controller=apprenant&action=liste");
		}
    } //fin class



?>