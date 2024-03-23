<?php
// Conexión a la base de datos (modifica los valores según tu configuración)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "calc";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $salario = $_POST["salario"];
    $horas = $_POST["horas"];

    // Insertar datos en la tabla
    $sql = "INSERT INTO tabla_ingresos (salario, horas) VALUES ('$salario', '$horas')";

    if ($conn->query($sql) === TRUE) {
        echo "Datos guardados correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Cerrar conexión
$conn->close();
?>
