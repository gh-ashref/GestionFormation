<?php
class formateur extends functions
{
    private $id_formateur;
	private $nom_formateur;
	private $prenom_formateur;
    private $sexe_formateur;
    private $pseudo_formateur;
    private $pass_formateur;
	private $date_naissance_formateur;
	private $email_formateur;
	private $ville_formateur;
	private $specialite_formateur;
	  
    public function __construct($id_formateur,$nom_formateur,$prenom_formateur,$sexe_formateur,$pseudo_formateur,$pass_formateur,$date_naissance_formateur,$email_formateur,$ville_formateur,$specialite_formateur){
        $this->id_formateur=$id_formateur;
        $this->nom_formateur=$nom_formateur;
        $this->prenom_formateur=$prenom_formateur;
		$this->sexe_formateur=$sexe_formateur;
		$this->pseudo_formateur=$pseudo_formateur;
		$this->pass_formateur=$pass_formateur;
		$this->date_naissance_formateur=$date_naissance_formateur;
		$this->email_formateur=$email_formateur;
		$this->ville_formateur=$ville_formateur;
		$this->specialite_formateur=$specialite_formateur;
    }
	
    //Ajout voiture
    public function add($cnx){
        $req=$cnx->prepare("insert into formateur (nom_formateur,prenom_formateur,sexe_formateur,pseudo_formateur,pass_formateur,date_naissance_formateur,email_formateur,ville_formateur,specialite_formateur) values(?,?,?,?,?,?,?,?,?)");
        $req->bindParam(1,$this->nom_formateur);
		$req->bindParam(2,$this->prenom_formateur);
		$req->bindParam(3,$this->sexe_formateur);
		$req->bindParam(4,$this->pseudo_formateur);
		$req->bindParam(5,$this->pass_formateur);
		$req->bindParam(6,$this->date_naissance_formateur);
		$req->bindParam(7,$this->email_formateur);
		$req->bindParam(8,$this->ville_formateur);
		$req->bindParam(9,$this->specialite_formateur);
		$req->execute();
		parent::redirect("index.php?controller=formateur&action=liste");
        }
		
	//liste voiture
    public function liste($cnx){
        $req=$cnx->query("select * from formateur")->fetchAll(PDO::FETCH_OBJ);
		return $req;
        }
		
	//detail voiture
    public function detail($cnx){
        $req=$cnx->query("select * from formateur where id_formateur=".$this->id_formateur)->fetch(PDO::FETCH_OBJ);
		return $req;
        }
		
	//Modif voiture
	public function edit($cnx){
	$req=$cnx->query("select * from formateur where id_formateur=".$this->id_formateur);
	$v=$req->fetch(PDO::FETCH_ASSOC);
	



      $req=$cnx->prepare("update formateur set nom_formateur=?, prenom_formateur=?, sexe_formateur=?, pseudo_formateur=?,pass_formateur=?,date_naissance_formateur=?,email_formateur=?,ville_formateur=?,specialite_formateur=?  where id_formateur=?");
      
	 $req->bindParam(1,$this->nom_formateur);
		$req->bindParam(2,$this->prenom_formateur);
		$req->bindParam(3,$this->sexe_formateur);
		$req->bindParam(4,$this->pseudo_formateur);
		$req->bindParam(5,$this->pass_formateur);
		$req->bindParam(6,$this->date_naissance_formateur);
		$req->bindParam(7,$this->email_formateur);
		$req->bindParam(8,$this->ville_formateur);
		$req->bindParam(9,$this->specialite_formateur);
		$req->bindParam(10,$this->id_formateur);
		$req->execute();
		parent::redirect("index.php?controller=formateur&action=liste");
        }
	

    public function etat($cnx,$datedb,$datefn){

        $req=$cnx->query("select * from formateur where date_echeance between '".$datedb."'and'".$datefn."'")->fetchAll(PDO::FETCH_OBJ);
		return $req;
        }

	//Delete 
    public function delete($cnx){
	$req=$cnx->query("select * from formateur where id_formateur=".$this->id_formateur);
	$v=$req->fetch(PDO::FETCH_ASSOC);
	
        $req=$cnx->exec("delete from formateur where id_formateur='".$this->id_formateur."'");
		parent::redirect("index.php?controller=formateur&action=liste");
		}
    } //fin class



?>