<?php
session_start();
include('includes/db.php');
include('includes/functions.php');

// Verificar rol de administrador
checkRole(1);

$id = $_GET['id'];

$sql = "DELETE FROM usuarios WHERE ID=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: usuarios.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
