<?php
    include_once "product.php";
    include_once "productManager.php";
    use Services\ProductManager;
    use Mobel\Product;
    $productManager = new ProductManager();
    $productManager->add(new Product("Laptop"));
    $productManager->add(new Product("Mobile"));
    $products = $productManager->getProducts();
    foreach($products as $product){
        echo $product->getName()."<br>";
    }


?>