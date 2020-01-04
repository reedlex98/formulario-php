<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP FUNDAMENTAL</title>
    <link href="_css/estilo.css" rel="stylesheet">
</head>

<body>
    <form action="formulario2.php" method="post">
        <?php if (isset($_POST["submit"]) && !empty($_POST["nome"]) && !empty($_POST["email"])) { ?>
            <div class="success">
                Dados submetidos com sucesso!
            </div>
        <?php } else { ?>
            <label for="nome">Nome Completo</label>
            <input type="text" name="nome" id="nome">

            <label for="email">Email</label>
            <input type="text" name="email" id="email">

            <input type="submit" name="submit" value="Enviar Cadastro">
        <?php } ?>

    </form>
</body>

</html>