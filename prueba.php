<?php

// Verifica si se ha enviado un número a través del formulario
if(isset($_POST['numero'])) {
    // Obtiene el número enviado por el formulario
    $numero = $_POST['numero'];
    
    // Obtiene la fecha y hora actual
    $fecha_hora = date('Y-m-d H:i:s');
    
    // Formatea los datos a almacenar en el archivo de texto
    $datos = "Número: $numero - Fecha y Hora: $fecha_hora\n";
    
    // Nombre del archivo donde se almacenarán los datos
    $archivo = 'datos.txt';
    
    // Abre el archivo en modo de escritura (si no existe, se crea)
    $manejador = fopen($archivo, 'a');
    
    // Escribe los datos en el archivo
    fwrite($manejador, $datos);
    
    // Cierra el archivo
    fclose($manejador);
    
    echo "El número $numero se ha almacenado correctamente en el archivo.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Almacenamiento de Número</title>
</head>
<body>
    <h2>Introduce un número</h2>
    <form method="post" action="">
        <input type="number" name="numero" required>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
