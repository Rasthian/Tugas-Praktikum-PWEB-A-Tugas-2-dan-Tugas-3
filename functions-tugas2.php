<?php

function view ($page) {
    include 'view/'.$page.'.php';
}

class Admin {
    public static function login_form() {
        view('admin-panel/admin-login');
    }

    public static function login_save() {
        view('admin-panel/admin-dashboard');
    }

    public static function dashboard() {
        view('admin-panel/admin-dashboard');
    }
}

class Customer {
    public static function login_form() {
        view('forms/customer-login');
    }

    public static function login_save() {
        view('shop/home');
    }

    public static function register_form() {
        view('forms/customer-register');
    }

    public static function register_save() {
        view('forms/customer-login');
    }

    public static function profile() {
        view('forms/customer-profile');
    }

    public static function profile_edited() {
        view('forms/customer-profile');
    }
   
}

class Home {
    public static function index() {
        view('shop/home');
    }
}

class Item {
    public static function index() {
        view('shop/item');
    }

    public static function show($id) {
        view('shop/item');
    }
}

class Cart {
    public static function index() {
        view('shop/cart');
    }
}

class Order {
    public static function index() {
        view('shop/order');
    }

    public static function show($id) {
        view('shop/order');
    }
}

class Contact {
    public static function index() {
        view('shop/contact');
    }
}
class User {
    public static function logout() {
        view('forms/customer-login');
    }
}
?>
