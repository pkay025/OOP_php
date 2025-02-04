<?php
require_once 'Product.php';

class Clothing extends Product {
    private $size;
    private $additionalCost;

    public function __construct($productId, $productName, $basePrice, $size, $additionalCost)
    {
        parent:: __construct($productId, $productName,$basePrice);
        $this->size =$size;
        $this->additionalCost = $additionalCost;
    }
   

    public function getSize(){
        return $this->size;
    }
    public function calculateFinalPrice() {
        return $this->basePrice + $this->additionalCost;
    }
}

?>
        