<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, tr, td { 
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <table>
        <form action="#" method="POST">
            <tr>
                <td>Ime:</td>
                <td><input type="text" name="firstName"></td>
            </tr>
            <tr>
                <td>Prezime:</td>
                <td><input type="text" name="lastName"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="Email"></td>
            </tr>
            <tr>
                <td>Lozinka:</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">Pošalji!</button>
                </td>
            </tr>
        </form>
    </table>
</body>
</html>

