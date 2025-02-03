<?php
abstract class Product {
    protected $productId;
    protected $productName;
    protected $basePrice;

    public function __construct($productId, $productName, $basePrice)
    {
        $this->productId = $productId;
        $this->productName = $productName;
        $this->basePrice = $basePrice;
    }

    public function getProductId(){
        return $this-> productId;
    }

    public function getProductName(){
        return $this-> productName;
    }
    
    public function getbaseprice(){
        return $this-> basePrice;
    }

     public function applyDiscount($percentage) {
        $this->basePrice = $this->basePrice * ($percentage / 100);
     }

    public abstract function calculateFinalPrice(); 

}
?>