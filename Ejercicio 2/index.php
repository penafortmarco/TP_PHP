<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }

        td {
            width: 50px;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>Tabla del 1</th>
        </tr>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo
            "<tr>
                <td>", $i, "</td>
                <td>", $i * 1, "</td>
            </tr>";
        }
        echo "<tr>
            <td>Múltiplo</td>
            <td>Resultado</td>
        </tr>"
        ?>
    </table>

    <table>
        <tr>
            <th>Tabla del 2</th>
        </tr>
        <?php
        $i = 0;
        while ($i < 10) {
            $i++;
            echo
            "<tr>
                <td>", $i, "</td>
                <td>", $i * 2, "</td>
            </tr>";
        }
        echo "<tr>
            <td>Múltiplo</td>
            <td>Resultado</td>
        </tr>"
        ?>
    </table>
    <table>
        <tr>
            <th>Tabla del 3</th>
        </tr>
        <?php
        $i = 0;
        do {
            $i++;
            echo
            "<tr>
                <td>", $i, "</td>
                <td>", $i * 3, "</td>
            </tr>";
        } while ($i < 10);
        echo "<tr>
            <td>Múltiplo</td>
            <td>Resultado</td>
        </tr>"
        ?>


    </table>
</body>

</html>