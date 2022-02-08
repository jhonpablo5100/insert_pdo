<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <?php
if(isset($_POST['bt'])){

    require "../connection/con.php";

    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO usuarios_tb(id,usuario,email,senha)VALUES(null,'$usuario','$email','$senha')";
    $pdo->query($sql);

    print "Usuario Adiconado com Sucesso";

    
}else{
    print "cadastre um usuario";
}

?>
</body>
</html>