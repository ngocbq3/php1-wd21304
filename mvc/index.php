<?php

require_once __DIR__ . '/autoload.php';

$act = $_GET['act'] ?? "";

switch ($act) {
    case "":
    case "home":

        $home = new HomeController;
        $home->index();
        break;
    case "detail":
        (new ProductController)->show();
        break;
    case "category":
        (new ProductController)->index();
        break;

    case "about":
        echo "<h1>Trang giới thiệu</h1>";
        break;
    case "contact":
        $contact = new ContactController;
        $contact->index();
        break;

    //Admin
    case 'admin':
        $ctl = $_GET['ctl'] ?? '';
        switch ($ctl) {
            case '':
            case 'products':
                (new AdminProductController)->index();
                break;
            case 'product-create':
                (new AdminProductController)->create();
                break;
            case 'product-store':
                (new AdminProductController)->store();
                break;
            default:
                echo "<h1>404 File not found</h1>";
        }
        break;
    default:
        echo "<h1>404 File not found</h1>";
}
