<?php

class ProductDao
{
    private $productName;
    private $image;
    private $shopName;
    private $address;
    private $price;
    private $weight;
    private $vendorName;

    // this object of currrent class
    // super object of parent class
    public function setProductName($productName)
    {

        $this->productName = $productName;
    }
    public function getProductName()
    {
        return $this->productName;
    }

    public function setImage($image)
    {

        $this->image = $image;
    }


    public function getImage()
    {
        return $this->image;
    }
    public function setShopname($shopName)
    {

        $this->shopName = $shopName;
    }

    public function getShopname()
    {
        return $this->shopName;
    }

    public function setAddress($address)
    {

        $this->address = $address;
    }
    public function getAddress()
    {
        return $this->address;
    }
    public function setPrice($price)
    {

        $this->price = $price;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function setWeight($weight)
    {

        $this->weight = $weight;
    }
    public function  getWeight()
    {
        return $this->weight;
    }
    public function setVendorName($vendorName)
    {

        $this->vendorName = $vendorName;
    }
    public function getVendorName()
    {
        return $this->vendorName;
    }
}
