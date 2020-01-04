<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP FUNDAMENTAL</title>
</head>

<body>

    <?php

    // if (isset($_POST["nome"]) && isset($_POST["email"])) {
    //     $nome = $_POST["nome"];
    //     $email = $_POST["email"];

    //     echo $nome . " " . $email;
    // }

    echo isset($_POST["nome"])
        ? $_POST["nome"] . "<br>"
        :  "Nome não foi definido <br>";

    echo isset($_POST["email"])
        ? $_POST["email"] . "<br>"
        :  "Email não foi definido <br>";

    ?>

</body>

</html>