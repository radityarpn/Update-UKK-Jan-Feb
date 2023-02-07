<?php
include '../utama/header.php';

if (isset($_GET['page'])) {
    $page= $_GET['page'];

    switch ($page) {
        case 'home':
        include 'home.php';
        break;
        case 'registrasi':
        include 'registrasi.php';
        break;

      default:
            echo "Halaman tidak tersedia";
            break;
    }
} else {
    include 'home.php';
}

?>