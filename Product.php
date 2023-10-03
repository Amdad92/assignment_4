<?php
//Create a product class for online shopping cart.
class Product
{
    //Properties
    private $id;
    private $name;
    private $price;

    public function __construct($id, $name, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }
    //Method to get formate the price.
    public function getformattedPrice()
    {
        return '$'.number_format($this->price, 2);
    }
    //Method to show details
    public function showDetails()
    {
        echo "-Product ID: {$this->id}\n";
        echo "-Product Name: {$this->name}\n";
        echo "-Product Price: {$this->getformattedPrice()}";
    }
}
$product = new Product('1','T-Shirt','19.99');
$product->showDetails();
