<?php 
require_once __DIR__.'/item.php';
require_once __DIR__ . '../../traits/Category.php';

class ItemCategory {
    use Category;
    public $icon;
    public function __construct ($_icon){
        $this->icon=$_icon;
    }
    
}
?>