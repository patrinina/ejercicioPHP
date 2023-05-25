<?php 

if($_POST){
$nombre = $_POST ['nombre'];
$apellido = $_POST[ 'apellido'];
$email = $_POST [ 'email'];

//Conexión con PDO

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cursosql";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
$conn = new mysqli ($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die ("Connection failed: "  . $conn->connect_error);
}

$sql="INSERT INTO usuario (nombre,apellido, email)

VALUES ('$nombre', '$apellido', '$email')";
if ($conn->query($sql)=== TRUE){
    echo "<h1>Formulario enviado correctamente</h1>";
    echo "<p>Nombre: $nombre</p>";
    echo "<p>Apellido: $apellido</p>";
    echo "<p>Email: $email</p>";

}else{
	echo "Error: ".$sql. "<br>".$conn->error;
}
$conn->close();

}

?>
