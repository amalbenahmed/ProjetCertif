<?php
include "connectuser.php";
//definition de la class user
class User{
    // les attribut de la classe user

public $nom ;
public $prenom ;
public $email ;
public $pass;
public $tel;

// les methode de la classe user



function insertUser(){
    $base= Connexion::getConnexion();
    $req = "INSERT INTO inscription (nom,prenom,email,tel,pass) VALUES ('".$this->nom."','".$this->prenom."','".$this->email."','".$this->tel."','".$this->pass."')";
   $nbLine= $base->exec($req);
   if($nbLine==1){
    echo "insertion avec succses";
    header('Location: http://localhost/projet/html/conx.html');
}
else{
 echo "insertion  echouer";
}
}    


public function updateUser(){
    $base= Connexion::getConnexion();
    $req ="UPDATE inscription SET nom='".$this->nom."',prenom='".$this->prenom."',tel='".$this->tel."',pass='".$this->pass."'  WHERE  id=".$this->email."";
    $x=$base->exec($req);
     
    if(!$x){
            
        echo "update  echouer";
    }
    else{
     
     echo "update avec succses";
    }

          
}
public function readUser(){

$base= Connexion::getConnexion();

$req ="SELECT * FROM inscription where email ='".$this->email."'";

$data=$base->query($req);

   if($data->rowCount()){

        return $data;
    }
    else{
        echo "email not found";
    }
}


public function affAll(){

    $base= Connexion::getConnexion();
    
    $req ="SELECT * FROM inscription ";
    
    $data=$base->query($req);
    
       if($data->rowCount()){
    
            return $data;
        }
        else{
            echo "user not found";
        }
    }
    

public function deleteUser(){
    $base= Connexion::getConnexion();
    $req="DELETE FROM inscription  WHERE email='".$this->email."'";



    if ($base->query($req) == TRUE) {
        echo "Error deleting record: " ;
    } else {
     
        echo "Record deleted successfully";
    }
    
} 
}





?>