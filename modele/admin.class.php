<?php
class admin extends functions
{
    private $login;
    private $pass;
    
    public function __construct($login,$pass){
        $this->login=$login;
        $this->pass=$pass;
    }
	
    //methode login
    public function login($cnx){
	$this->pass=md5($this->pass);
       $req=$cnx->query("select * from apprenant where pseudo_apprenant='".$this->login."' and pass_apprenant='".$this->pass."'");
	   $verif=$req->rowCount();
	   $req2=$cnx->query("select * from formateur where pseudo_formateur='".$this->login."' and pass_formateur='".$this->pass."'");
	   $verif2=$req2->rowCount();
	   if($verif==1)
	   {
	   $_SESSION['login']=$this->login;
	   $_SESSION['pass']=$this->pass;
	   $this->redirect("index.php?controller=apprenant&action=liste");
	   }
	   else if ($verif2==1)
	   {
		   
		 $_SESSION['login']=$this->login;
	   $_SESSION['pass']=$this->pass;
	   $this->redirect("index.php?controller=formateur&action=liste");
	   
	   }
	   else
	   $this->redirect("login.php");
        }
		
	//liste voiture
    public function logout(){
       $this->redirect("login.php");
        }
		
		
    } //fin class



?>