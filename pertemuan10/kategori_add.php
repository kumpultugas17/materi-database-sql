<?php
require 'config.php';
if (isset($_POST['submit'])) {
    $kategori = $_POST['kategori'];
    $sql = $conn->query("INSERT INTO kategori (nama, updated_at) VALUES ('$kategori', '')");

    header('Location:kategori.php');
}