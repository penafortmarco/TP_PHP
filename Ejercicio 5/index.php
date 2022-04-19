<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>


<body>
    <table>
        <tr>
            <th>Datos de la persona</th>
        </tr>

        <tr>
            <td>Nombre</td>
            <td>
                <?php
                print $_REQUEST["name"];
                ?>
            </td>
        </tr>
        <tr>
            <td>Apellido</td>
            <td>
                <?php
                print $_REQUEST["lastname"];
                ?>
            </td>
        </tr>
        <tr>
            <td>DNI</td>
            <td>
                <?php
                print $_REQUEST["identification"];
                ?>
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td>
                <?php
                print $_REQUEST["email"];
                ?>
            </td>
        </tr>
        <tr>
            <td>Sexo</td>
            <td>
                <?php
                print $_REQUEST["sex"];
                ?>
            </td>
        </tr>
        <tr>
            <td>Direccion</td>
            <td>
                <?php
                echo $_REQUEST["adress"], $_REQUEST["number"], "torre", $_REQUEST["tower"],
                "piso:", $_REQUEST["floor"], "Departamento: ", $_REQUEST["dept"], "<br>",
                $_REQUEST["country"], " ", $_REQUEST["province"], " ", $_REQUEST["area"];
                ?>
            </td>
        </tr>
        <tr>
            <td>Edad</td>
            <td>
                <?php
                print $_REQUEST["age"];
                ?>
            </td>
        </tr>
        <tr>
        <tr>
            <td>Estado civil</td>
            <td>
                <?php
                print $_REQUEST["civil_status"];
                ?>
            </td>
        </tr>
        <tr>
        <tr>
            <td>Hijos</td>
            <td>
                <?php
                print $_REQUEST["children"];
                ?>
            </td>
        </tr>
        <tr>
        <tr>
            <td>Hobbies</td>
            <td>
                <?php
                print $_REQUEST["hobbies"];
                ?>
            </td>
        </tr>
        <tr>


    </table>
</body>

</html>