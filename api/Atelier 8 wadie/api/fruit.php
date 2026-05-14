<?php
if(!class_exists('fruit')){
    class Fruit{
    private $id,$nom,$prix,$photo;
    function __construct($id,$nom,$prix,$photo){
        $this->id=$id;
        $this->nom=$nom;
        $this->prix=$prix;
        $this->photo=$photo;
    }
    function getId(){
        return $this->id;
    }
    function getNom(){
        return $this->nom;
    }
    function getprix(){
        return $this->prix;
    }
    function getPhoto(){
        return $this->photo;
    }
    function setId($id){
        $this->id=$id;
    }
    function setNom($nom){
        $this->nom=$nom;
    }
    function setPrix($prix){
        $this->prix=$prix;
    }
    function setPhoto($photo){
        $this->photo=$photo;
    }
    
}
}
?>