<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios de PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <header class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1>Ejercicios resueltos del Taller PHP Básico</h1>
        </div>
    </header>
    <div class="container mt-5">
        <div class="card mb-4">
            <div class="card-body">
                <h3 class="card-title">Ejercicio 1</h3>
                <p class="card-text"> Crear un arreglo asociativo llamado $estudiantes donde cada clave es el nombre de un estudiante
                    y el valor es un arreglo con las calificaciones de ese estudiante en diferentes asignaturas.
                    Calcular el promedio de calificaciones para cada estudiante y luego mostrar al estudiante con el promedio más alto.</p>
                <?php
                $estudiantes = [
                    'Carlos' => [4.5, 3.5, 4.0, 3.8, 4.2],
                    'Sofía' => [2.5, 3.0, 3.0, 3.8, 4.0],
                    'Juan' => [3.4, 1.6, 2.0, 3.8, 4.0],
                    'María' => [4.0, 3.5, 4.0, 3.8, 4.2],
                    'Jesús' => [5, 4.5, 4.0, 4.0, 4.2]
                ];
                $promedios = [];
                foreach ($estudiantes as $nombre => $calificaciones) {
                    $promedio = array_sum($calificaciones) / count($calificaciones);
                    $promedios[$nombre] = $promedio;
                }
                arsort($promedios);
                $mejorEstudiante = key($promedios);
                echo "El estudiante con el promedio más alto es: $mejorEstudiante con un promedio de {$promedios[$mejorEstudiante]}";
                ?>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-body">
                <h3 class="card-title">Ejercicio 2</h3>
                <p class="card-text"> Crea un arreglo asociativo llamado $empleados que contenga información sobre varios
                    empleados. Cada empleado debe tener un nombre y un arreglo asociativo que almacene
                    información adicional, como salario, fecha de contratación y departamento. Luego,
                    muestra los nombres de todos los empleados junto con su salario.</p>
                <?php
                $empleados = [
                    'Alejandro' => [
                        'salario' => 2960000,
                        'fecha_contratacion' => '2021-07-15',
                        'departamento' => 'Ventas'
                    ],
                    'Camila' => [
                        'salario' => 1491130,
                        'fecha_contratacion' => '2020-08-12',
                        'departamento' => 'Recursos Humanos'
                    ],
                    'Pedro' => [
                        'salario' => 12000000,
                        'fecha_contratacion' => '2019-03-09',
                        'departamento' => 'Tecnología'
                    ],
                    'Laura' => [
                        'salario' => 2100000,
                        'fecha_contratacion' => '2018-01-25',
                        'departamento' => 'Marketing'
                    ],
                    'Santiago' => [
                        'salario' => 3500000,
                        'fecha_contratacion' => '2017-06-30',
                        'departamento' => 'Operaciones'
                    ]
                ];
                echo "<table class='table table-bordered table-striped'>
                    <thead>
                        <tr>
                        <th>Nombre</th>
                        <th>Salario en Pesos Colombianos</th>
                        </tr>
                    </thead>
                    <tbody>";
                foreach ($empleados as $nombre => $info) {
                    echo "<tr>
                        <td>$nombre</td>
                        <td>{$info['salario']}</td>
                    </tr>";
                }
                echo "</tbody>
                    </table>";
                ?>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-body">
                <h3 class="card-title">Ejercicio 3</h3>
                <p class="card-text"> Crea un arreglo asociativo llamado $productos que almacene información sobre
                    productos en una tienda. Cada producto tiene un nombre, precio y un arreglo asociativo
                    que contiene detalles adicionales, como disponibilidad y reseñas. Muestra el nombre y el
                    precio de todos los productos que están disponibles.</p>
                <?php
                $productos = [
                    'Laptop' => [
                        'precio' => 2500000,
                        'detalles' => [
                            'disponibilidad' => true,
                            'reseñas' => 15
                        ]
                    ],
                    'Smartphone' => [
                        'precio' => 1300000,
                        'detalles' => [
                            'disponibilidad' => false,
                            'reseñas' => 8
                        ]
                    ],
                    'Tablet' => [
                        'precio' => 800000,
                        'detalles' => [
                            'disponibilidad' => true,
                            'reseñas' => 7
                        ]
                    ],
                    'Smartwatch' => [
                        'precio' => 200000,
                        'detalles' => [
                            'disponibilidad' => true,
                            'reseñas' => 12
                        ]
                    ],
                    'Audífonos' => [
                        'precio' => 300000,
                        'detalles' => [
                            'disponibilidad' => false,
                            'reseñas' => 5
                        ]
                    ],
                    'Padmouse' => [
                        'precio' => 50000,
                        'detalles' => [
                            'disponibilidad' => true,
                            'reseñas' => 3
                        ]
                    ]
                ];
                echo "<table class='table table-bordered table-striped'>
                    <thead>
                        <tr>
                        <th>Nombre</th>
                        <th>Precio en Pesos Colombianos</th>
                        </tr>
                    </thead>
                    <tbody>";
                foreach ($productos as $nombre => $info) {
                    if ($info['detalles']['disponibilidad']) {
                        echo "<tr>
                            <td>$nombre</td>
                            <td>{$info['precio']}</td>
                        </tr>";
                    }
                }
                echo "</tbody>
                    </table>";
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>