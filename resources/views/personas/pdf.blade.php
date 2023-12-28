<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            font-size: 12px;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: 'center';
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>

    <h2>HTML Table</h2>
    <?php 

?>
    <table>
        <tr>
            <th>Identificación</th>
            <th>Apellido</th>
            <th>Nombre</th>
            <th>Sexo</th>
            <th>Fecha de Nacimiento</th>
            <th>Genero</th>
            <th>Población Especial</th>
            <th>Telefono</th>
            <th>Entidad</th>
            <th>Dirección</th>
        </tr>
        <?php 
    foreach ($persona as $p) {
        ?>
        <tr>
            <td><?php echo $p->identificacion ?></td>
            <td><?php echo $p->nombre1 ?> </td>
            <td><?php echo $p->apellido1 ?> </td>
            <td><?php echo $p->sexo ?> </td>
            <td><?php echo $p->fecha_nacimiento ?> </td>
            <td><?php echo $p->genero ?> </td>
            <td><?php echo $p->poblacion_especial ?> </td>
            <td><?php echo $p->telefono ?> </td>
            <td><?php echo $p->entidad ?> </td>
            <td><?php echo $p->direccion ?> </td>
        </tr>
        <?php
    }
  
  ?>
    </table>

</body>

</html>