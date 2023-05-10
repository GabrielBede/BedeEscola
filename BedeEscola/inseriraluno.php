<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexão</title>
    <link rel="stylesheet" href="./css/stylecliente.css">
</head>
<body>
<?php
    include_once "conexao.php";
    if ($_POST ['cxaluno'] !="")
    {
        $Nome_Aluno = $_POST ['cxaluno'];
        $Email_Aluno = $_POST ['cxemail'];
        $Fone_Aluno = $_POST ['cxfone'];
        $CPF_Aluno = $_POST ['cxcpf'];

        $sql = "insert into
            Aluno (Nome_Aluno, Email_Aluno, Fone_Aluno, CPF_Aluno)
            values
            ('$Nome_Aluno', '$Email_Aluno', '$Fone_Aluno', '$CPF_Aluno');";
        
            $query = mysqli_query
            ($conn, $sql);
            echo "Dados cadastrados com sucesso!";
    }
    else {
        echo "Dados incorretos...";
    }
?> 
</body>
</html>

