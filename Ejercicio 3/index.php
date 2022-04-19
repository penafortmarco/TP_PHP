<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table,
    th,
    td {
        border: 1px solid black;
    }
</style>

<body>
    <table>
        <tr>Fechas</tr>

        <tr>
            <td>
                <?php
                echo date("l"), " ", date("d"), " de ", date("F"), " de ", date("Y"); //Día 00 "de" Mes "de" año
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                echo date("d"), "/", date("m"), "/", date("y");
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                echo date("D"), " ", date("j"), " ", date("g"), ":", date("i"), " ", date("a");
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                echo date("l"), " ", date("j"), "  ", date("h"), ":", date("i"), " ", date("A");
                ?>
            </td>
        </tr>





    </table>
</body>

</html>