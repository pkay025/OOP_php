<?php
require_once "Electronics.php";
require_once "Clothing.php";
require_once "Cart.php";

class Main {
    public static function main(){
        $laptop = new Electronics("E001", "Laptop", 1000.0, 24);

        $jacket = new Clothing("C001", "Winter Jacket", 200.0, "M", 20.0);

        $laptop->applyDiscount(10);

    echo "Final price of Laptop: " . $laptop->calculateFinalPrice() . "\n";
    echo "Final price of Winter Jacket: " . $jacket->calculateFinalPrice() . "\n";

        $cart = new Cart();

        $cart->addProduct($laptop);
        $cart->addProduct($jacket);

        $totalPrice = $cart->calculateTotalPrice($laptop, $jacket);
    echo "Total price of products in cart: " . $totalPrice . "\n";

    }
}

?>

