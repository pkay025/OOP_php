<?php
// filepath: /path/to/Cart.php

class Cart {
    private $products = [];

    public function addProduct(Product $product) {
        $this->products[] = $product;
    }

    public function calculateTotalPrice(...$products) {
        $total = 0;
        foreach ($products as $product) {
            $total += $product->calculateFinalPrice();
        }
        return $total;
    }
}
?>

