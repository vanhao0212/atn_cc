<?php

class Product {
    private $name;
    private $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }
}

class CartItem {
    private $product;
    private $quantity;

    public function __construct($product, $quantity) {
        $this->product = $product;
        $this->quantity = $quantity;
    }

    public function getProduct() {
        return $this->product;
    }

    public function getQuantity() {
        return $this->quantity;
    }
}

class ShoppingCart {
    private $items;

    public function __construct() {
        $this->items = array();
    }

    public function addItem($product, $quantity) {
        $newItem = new CartItem($product, $quantity);
        $this->items[] = $newItem;
    }

    public function removeItem($item) {
        $index = array_search($item, $this->items);
        if ($index !== false) {
            unset($this->items[$index]);
        }
    }

    public function calculateTotal() {
        $total = 0.0;
        foreach ($this->items as $item) {
            $total += $item->getProduct()->getPrice() * $item->getQuantity();
        }
        return $total;
    }

    public function printItems() {
        foreach ($this->items as $item) {
            echo $item->getProduct()->getName() . " - Quantity: " . $item->getQuantity() . "<br>";
        }
    }
}

$product1 = new Product("Product 1", 10.99);
$product2 = new Product("Product 2", 5.99);

$cart = new ShoppingCart();
$cart->addItem($product1, 2);
$cart->addItem($product2, 1);

$cart->printItems();

$total = $cart->calculateTotal();
echo "Total: $" . $total;

?>