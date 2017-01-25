<?php
class apprenant extends functions
{
    private $id_apprenant;
	private $nom_apprenant;
	private $prenom_apprenant;
    private $sexe_apprenant;
    private $pseudo_apprenant;
    private $pass_apprenant;
	private $date_naissance_apprenant;
	private $email_apprenant;
	private $ville_apprenant;
	private $niveau_apprenant;
	    
    public function __construct($id_apprenant,$nom_apprenant,$prenom_apprenant,$sexe_apprenant,$pseudo_apprenant,$pass_apprenant,$date_naissance_apprenant,$email_apprenant,$ville_apprenant,$niveau_apprenant){
        $this->id_apprenant=$id_apprenant;
        $this->nom_apprenant=$nom_apprenant;
        $this->prenom_apprenant=$prenom_apprenant;
		$this->sexe_apprenant=$sexe_apprenant;
		$this->pseudo_apprenant=$pseudo_apprenant;
		$this->pass_apprenant=$pass_apprenant;
		$this->date_naissance_apprenant=$date_naissance_apprenant;
		$this->email_apprenant=$email_apprenant;
		$this->ville_apprenant=$ville_apprenant;
		$this->niveau_apprenant=$niveau_apprenant;
    }
	
    //Ajout voiture
    public function add($cnx){
        $req=$cnx->prepare("insert into apprenant (nom_apprenant,prenom_apprenant,sexe_apprenant,pseudo_apprenant,pass_apprenant,date_naissance_apprenant,email_apprenant,ville_apprenant,niveau_apprenant) values(?,?,?,?,?,?)");
        $req->bindParam(1,$this->nom_apprenant);
		$req->bindParam(2,$this->nom_apprenant);
		$req->bindParam(3,$this->prenom_apprenant);
		$req->bindParam(4,$this->sexe_apprenant);
		$req->bindParam(5,$this->pseudo_apprenant);
		$req->bindParam(6,$this->pass_apprenant);
		$req->bindParam(7,$this->date_naissance_apprenant);
		$req->bindParam(8,$this->email_apprenant);
		$req->bindParam(9,$this->ville_apprenant);
		$req->bindParam(10,$this->niveau_apprenant);
		$req->execute();
		parent::redirect("index.php?controller=cheque&action=liste");
        }
		
	//liste voiture
    public function liste($cnx){
        $req=$cnx->query("select * from cheque")->fetchAll(PDO::FETCH_OBJ);
		return $req;
        }
		
	//detail voiture
    public function detail($cnx){
        $req=$cnx->query("select * from cheque where numero=".$this->numero)->fetch(PDO::FETCH_OBJ);
		return $req;
        }
		
	//Modif voiture
	public function edit($cnx){
	$req=$cnx->query("select * from cheque where numero=".$this->numero);
	$v=$req->fetch(PDO::FETCH_ASSOC);
	



      $req=$cnx->prepare("update cheque set montant=?, beneficiere=?, payeur=?, banque=?,date_echeance=?  where numero=?");
        $req->bindParam(1,$this->montant);
		$req->bindParam(2,$this->benificiere);
		$req->bindParam(3,$this->payeur);
		$req->bindParam(4,$this->banque);
		$req->bindParam(5,$this->date_echeance);
		$req->bindParam(6,$this->numero);

		$req->execute();
		parent::redirect("index.php?controller=cheque&action=liste");
        }
	

    public function etat($cnx,$datedb,$datefn){

        $req=$cnx->query("select * from cheque where date_echeance between '".$datedb."'and'".$datefn."'")->fetchAll(PDO::FETCH_OBJ);
		return $req;
        }

	//Delete 
    public function delete($cnx){
	$req=$cnx->query("select * from cheque where numero=".$this->numero);
	$v=$req->fetch(PDO::FETCH_ASSOC);
	
        $req=$cnx->exec("delete from cheque where numero='".$this->numero."'");
		parent::redirect("index.php?controller=cheque&action=liste");
		}
    } //fin class



?>