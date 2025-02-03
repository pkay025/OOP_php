<?php 
require_once 'Product.php';

class Electronics extends Product{
    private $warrantyPeriod;

    public function __construct($productId, $productName, $basePrice, $warrantyPeriod )
    {
        parent:: __construct($productId, $productName,$basePrice);
        $this->warrantyPeriod = $warrantyPeriod;
    }
    public function getWarrantyPeriod(){
        return $this->warrantyPeriod;
    }
    public function calculateFinalPrice() {
        return $this->basePrice;
    }
}
?>