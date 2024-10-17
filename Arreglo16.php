<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
<?php
// Arreglo inicial de empleados y sus sueldos
$empleados = [
    ["nombre" => "Jairo", "sueldo" => 3000],
    ["nombre" => "Omar", "sueldo" => 2500],
    ["nombre" => "Axel", "sueldo" => 4000],
    ["nombre" => "Mario", "sueldo" => 3500],
    ["nombre" => "Emilio", "sueldo" => 2800],
];

// Ordenar el arreglo por sueldo
usort($empleados, function($a, $b) {
    return $a['sueldo'] <=> $b['sueldo'];
});

// Imprimir el arreglo ordenado
echo "Empleados ordenados por sueldo:\n";
foreach ($empleados as $empleado) {
    echo "Nombre: " . $empleado['nombre'] . ", Sueldo: " . $empleado['sueldo'] . "\n";
}

// Agregar 2 empleados más
array_push($empleados, ["nombre" => "Laura", "sueldo" => 3200]);
array_push($empleados, ["nombre" => "Carlos", "sueldo" => 4500]);

// Imprimir el nuevo arreglo
echo "\nEmpleados después de agregar más:\n";
foreach ($empleados as $empleado) {
    echo "Nombre: " . $empleado['nombre'] . ", Sueldo: " . $empleado['sueldo'] . "\n";
}
?>
</body>
</html>