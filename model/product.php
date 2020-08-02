<?php
    class Product{
        public $id;
        public $name;
        public $price;
        public $oldPrice;
        public $image;
        public $type;
        function __construct($id,$name,$price,$oldPrice,$image,$type)
        {
            $this->id=$id;
            $this->name=$name;
            $this->price=$price;
            $this->oldPrice=$oldPrice;
            $this->image=$image;
            $this->type=$type;
        }
        
    }
?>
