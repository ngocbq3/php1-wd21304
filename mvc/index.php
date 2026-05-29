<?php
require_once __DIR__ . "/Controllers/HomeController.php";
require_once __DIR__ . "/Controllers/ContactController.php";

require_once __DIR__ . "/Models/Database.php";

$act = $_GET['act'] ?? "";

switch ($act) {
    case "":
    case "home":
        $db = new Database;
        $db->connect();
        $home = new HomeController;
        $home->index();
        break;
    case "about":
        echo "<h1>Trang giới thiệu</h1>";
        break;
    case "contact":
        $contact = new ContactController;
        $contact->index();
        break;
    default:
        echo "<h1>404 File not found</h1>";
}
