<?php

include "connectuser.php";


class recette{


public $nom;
public $type;
public $comp;
public $etap;
public $id;



function insertRecette(){
    $base= Connexion::getConnexion();
    $req = "INSERT INTO recette(nomrec, typerec, comp, etape) VALUES ('".$this->nom."','".$this->type."','".$this->comp."','".$this->etap."')";
   $nbLine= $base->exec($req);
   if($nbLine==1){
    echo "insertion avec succses";
    header('Location: http://localhost/projet/html/profileadd.html');
}
else{
 echo "insertion  echouer";
}
}    

function insertRecette1(){
    $base= Connexion::getConnexion();
    $req = "INSERT INTO recette(nomrec, typerec, comp, etape) VALUES ('".$this->nom."','".$this->type."','".$this->comp."','".$this->etap."')";
   $nbLine= $base->exec($req);
   if($nbLine==1){
    echo "insertion avec succses";
    header('Location: http://localhost/projet/html/profuser.html');
}
else{
 echo "insertion  echouer";
}
}    

public function updateRecette(){
    $base= Connexion::getConnexion();
    $req ="UPDATE recette SET nomrec='".$this->nom."',typerec='".$this->type."',comp='".$this->comp."',etape='".$this->etap."' WHERE id='".$this->id."'";
    $x=$base->exec($req);
     if(!$x){
            
        echo "update  echouer";
    }
    else{
    
     echo "update avec succses";
    }

          
}
public function readrecette(){
    $base= Connexion::getConnexion();

   $req ="SELECT * FROM recette WHERE id='".$this->id."'";

   $data=$base->query($req);

   if($data->rowCount()){

        return $data;
    }
    else{
        echo "id not found";
    }
}
public function selectName(){
    $base= Connexion::getConnexion();
    $req ="SELECT * FROM recette";
    $data=$base->query($req);

    if($data->rowCount()){
 
         return $data;
     }
     else{
         echo "il n' ya pas accune recette";
     }
}

public function deleteRecette(){
    $base= Connexion::getConnexion();
    $req="DELETE FROM recette WHERE id ='".$this->id."'";


    $data=$base->exec($req);
  
    return $data;

}
public function selectGateau(){
    $base= Connexion::getConnexion();
    $req ="SELECT * FROM recette WHERE typerec = 'gateau'  ";
    $data=$base->query($req);
   
    if($data->rowCount()){

        return $data;
    }
    else{
        echo " not found";
    }
}
public function selectJus(){
    $base= Connexion::getConnexion();
    $req ="SELECT * FROM recette WHERE typerec= 'jus'";
    $data=$base->query($req);
    if($data->rowCount()){

        return $data;
    }
    else{
        echo " not found";
    }
   
}
public function selectcake(){
    $base= Connexion::getConnexion();
    $req ="SELECT * FROM recette WHERE typerec = 'cake'  ";
    $data=$base->query($req);
    if($data->rowCount()){

        return $data;
    }
    else{
        echo " not found";
    }
}
public function selectMac(){
    $base= Connexion::getConnexion();
    $req ="SELECT * FROM recette WHERE typerec = 'macron'  ";
    $data=$base->query($req);
    if($data->rowCount()){

        return $data;
    }
    else{
        echo " not found";
    }
}
public function selectSable(){
    $base= Connexion::getConnexion();
    $req ="SELECT * FROM recette WHERE typerec = 'sablé'  ";
    $data=$base->query($req);
    if($data->rowCount()){

        return $data;
    }
    else{
        echo " not found";
    }

}
public function selectTart(){
    $base= Connexion::getConnexion();
    $req ="SELECT * FROM recette WHERE typerec = 'tarte'  ";
    $data=$base->query($req);
    if($data->rowCount()){

        return $data;
    }
    else{
        echo " not found";
    }
    
}


}
?>