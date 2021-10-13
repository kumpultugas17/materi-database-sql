<?php
require 'config.php';
$id = $_POST['id'];
$kategori = $_POST['kategori'];
$sql = $conn->query("UPDATE kategori SET nama='$kategori', updated_at='' WHERE id=$id");

if ($sql) {
    header('Location:kategori.php');
}