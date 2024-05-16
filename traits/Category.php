<?php
trait Category{
    public $category;
    public function setCategory($_category){
        if($_category != 'cane' and $_category != 'gatto'){
            throw new Exception($_category.' categoria sbagliata');
        }   else {
                $this->category=$_category;
            }
    }
}
?>