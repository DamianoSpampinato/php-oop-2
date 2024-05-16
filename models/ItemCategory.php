<?php 
require_once __DIR__.'/item.php';

class ItemCategory extends Item {
    public $category;
    public function __construct ($_category){
        $this->category=$_category;
    }
}
?>