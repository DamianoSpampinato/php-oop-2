<?php
//creare entità prodotto
class Item{
    //inizializzare tutte le varibiali public per poi modificarle in corso d'opera
    public $name;
    public $price;
    public $age;
    public $image;
    public $product;
    
    
    public function __construct($_name, $_price){
        $this->name = $_name;
        $this->price = $_price;
        
        
    }
    public function getPrice(){
        return $this->price;
    }
    //prendi i dettagli
    public function getDetails($_age, $_image,$_product){
        $this->age=$_age;
        $this->image=$_image;
        $this->product=$_product;
    }
}
//identificare le classi generiche
//poi creare entità ereditarie
?>