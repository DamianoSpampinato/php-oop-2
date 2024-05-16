<?php 
require_once __DIR__.'/item.php';

class ItemCategory {
    public $category;
    public $icon;
    public function __construct ($_category, $_icon){
        $this->category=$_category;
        $this->icon=$_icon;
    }
}
?>