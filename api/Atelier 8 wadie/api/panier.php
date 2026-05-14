<?php
include 'fruit.php';
class Panier{
    private $tab_fruit;
    function __construct(){
        $this->tab_fruit=array();
    }
    function getTable_fruit(){
        return $this->tab_fruit;
    }
    function setTable_fruit($tab_fruit){
        $this->tab_fruit=$tab_fruit;
    }
    function ajouter(Fruit $f){
        //this is how to add a variable to the table
        $this->tab_fruit[]=$f;
    }
    function prix_total(){
        $total=0;
        foreach($this->tab_fruit as $fruit){
            $total+=$fruit->getprix();
        }
        return $total;
    }
    function supprimer($id){
        //how to delete an item in the table
        foreach($this->tab_fruit as $key=> $fruit){
            if($fruit->getId()==$id){
                unset($this->tab_fruit[$key]);
                break;
            }
        }
    }
}
?>