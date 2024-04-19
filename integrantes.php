<?php
require ('PHP/conexion.php');
$sql = "SELECT * FROM integrantes";
$stmt = $conn->prepare($sql);
$stmt->execute();
$resultado = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integrantes</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>

<div class="container mx-auto">
<h1 class="text-3xl font-bold text-center mt-8 my-8">INTEGRANTES</h1>

<table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
        <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID Usuario</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Teléfono</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Correo</th>
        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
        <?php foreach ($resultado as $fila): ?>
            <tr>
                <td class="px-6 py-4 whitespace-nowrap"><?php echo $fila['id_usuario']; ?></td>
                <td class="px-6 py-4 whitespace-nowrap"><?php echo $fila['nombre']; ?></td>
                <td class="px-6 py-4 whitespace-nowrap"><?php echo $fila['telefono']; ?></td>
                <td class="px-6 py-4 whitespace-nowrap"><?php echo $fila['correo']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<button onclick="goBack()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
  Regresar
</button>

<script>
function goBack() {
  window.history.back();
}
</script>


</div>

</body>
</html>