<?php
interface Bakery
{
    public function signUp(LoginDao $login);
    public function getCredential(LoginDao $login);
    public function saveUserDetails(UserDao $user);
    public function addProducts(ProductDao $productDao);
}
