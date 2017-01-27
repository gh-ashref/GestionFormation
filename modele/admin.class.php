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
	
  
	  
	   if($this->login=='admin' && $this->pass=='admin' )
	   {
	   $_SESSION['login']=$this->login;
	   $_SESSION['pass']=$this->pass;
	   $this->redirect("index.php?controller=apprenant&action=liste");
	   }
	   
	 // else
	 //  $this->redirect("login.php");
        }
		
	//liste voiture
    public function logout(){
		session_destroy();
       $this->redirect("login.php");
        }
		
		
    } //fin class



?>