<?php
    include "util.php";
    $conn = conecta();
    $id = $_GET['id'];

    $varSQL = "DELETE FROM produtos WHERE id = :id";
    $delete = $conn -> prepare($varSQL);
    $delete -> bindParam(':id', $id);
    $delete -> execute();

    header("location: usuarios.php");
?>