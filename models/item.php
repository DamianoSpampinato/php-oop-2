<?php
//creare entità prodotto
class Item{
    //inizializzare tutte le varibiali public per poi modificarle in corso d'opera
    public $name;
    public $price;
    public $category;
    public $age;
    public $image;
    
    
    public function __construct($_name, $_price){
        $this->name = $_name;
        $this->price = $_price;
        
        
    }
    //prendi i dettagli
    public function getDetails($_category, $_age, $_image){
        $this->category=$_category;
        $this->age=$_age;
        $this->image=$_image;
    }
}
//identificare le classi generiche
//poi creare entità ereditarie
?>