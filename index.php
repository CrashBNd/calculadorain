<?php
// Mostrar mensaje si existe
if (isset($_GET['mensaje'])) {
    echo "<p>" . htmlspecialchars($_GET['mensaje']) . "</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de ingresos</title>
  <style>
   
input[type="number"] {
    border-radius: 10px; /* Hace que los bordes de los inputs sean redondeados */
    padding: 8px; 
  
}

/* CSS */
.button-17 {
  touch-action: manipulation;
  border: 0;
  border-radius: 6px;
  padding: 8px 16px;
  background-color: #5371f4;
  background-image: url("https://csspro.com/css-3d-buttons/buttons-img/terrazzo-blue.png");
  background-size: 60px;
  background-position: -2px;
  box-shadow: inset 0 2px 2px rgba(255, 255, 255, 0.4), inset 0 -2px 1px rgba(0, 0, 0, 0.1), 0 1px 2px rgba(0, 0, 0, 0.2), 0 2px 4px rgba(0, 0, 0, 0.1);
  text-align: center;
  font-weight: 500;
  color: #fff;
  text-shadow: 0 1px rgba(0, 0, 0, 0.2);
  transition-property: transform;
  transition-duration: 0.2s;
}

.button-17:active {
  transform: scale(0.96);
}
body {
    margin: 0;
    padding: 0;
    background-color: #0093E9;
    background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);
    background-size: cover;
    background-attachment: fixed;
    display: flex; /* Usamos flexbox para alinear los elementos */
    justify-content: center; /* Centramos horizontalmente */
    align-items: center; /* Centramos verticalmente */
    height: 100vh; /* Ajustamos la altura para ocupar toda la ventana */
}
    .container {
    text-align: center; /* Centramos el texto dentro del contenedor */
}
    </style>
  
</head>
<body class="body">
   <div class="container">
    <h1>Calculadora de ingresos</h1>
    <form action="db.php" method="post">
    <label for="salario">Salario por hora:</label>
  
    <input type="number" class="form" id="salario" min="0" step="0.01">
    <br>
    <br>
    <label for="horas" >Horas trabajadas:</label>
     
    <input type="number"  class="form" id="horas" min="0">
    <br>
    <br>
    <button class="button-17" onclick="calcularIngresos()">Calcular ingresos</button>
  </form>
    <p id="resultado"></p>
      </div>   
    <script src="mein.js"></script>
</body>
</html>
