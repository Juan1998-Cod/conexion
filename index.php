<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prueba2";

// Create connection
$conn = new mysqli($servername,$username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO empleados(id,nombre, apellido, email)
VALUES (5050,'Juan', 'David','Juandavidruiz@hotmail.com')";

if ($conn->query($sql) === TRUE) {
  echo "nueva fila creada ";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>