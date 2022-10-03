<?php
include("conect.php");

$categorias = "Select * from tab04_categoria_futbol";
$partidos = "SELECT * FROM `tab02_partido`  \n"

    . "ORDER BY `tab02_partido`.`tab02_fecha` DESC";
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Árbitros Bernabé</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">Equipo Local</th>
                <th scope="col">Equipo Visitante</th>
                <th scope="col">Ciudad</th>
                <th scope="col">€</th>
                <th scope="col">Categoria</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $partido = mysqli_query($conn, $partidos);
            while ($row = mysqli_fetch_assoc($partido)) { ?>
                <tr>
                    <td><?php echo $row["tab02_equipo_local"] ?></td>
                    <td><?php echo $row["tab02_equipo_visitante"] ?></td>
                    <td><?php echo $row["tab02_localidad"] ?></td>
                    <td><?php echo $row["tab02_importe"] ?>€</td>
                    <td><?php

                        if ($row["tab04_id_categoria"] == 1) {
                            echo "Prebenjamín";
                        } elseif ($row["tab04_id_categoria"] == 2) {
                            echo "Benjamín";
                        } elseif ($row["tab04_id_categoria"] == 3) {
                            echo "Alevín";
                        } elseif ($row["tab04_id_categoria"] == 4) {
                            echo "Infantil";
                        } elseif ($row["tab04_id_categoria"] == 5) {
                            echo "Cadete";
                        } elseif ($row["tab04_id_categoria"] == 6) {
                            echo "Juvenil";
                        } elseif ($row["tab04_id_categoria"] == 7) {
                            echo "Senior";
                        }

                        ?></td>
                <?php } ?>
                </tr>

        </tbody>
    </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <?php mysqli_close($conn); ?>
</body>

</html>