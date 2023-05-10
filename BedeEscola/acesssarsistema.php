<?php 
    $user = $_POST["cxuser"];
    $senha = $_POST["cxsenha"];

    if ($user == "Gabriel" && $senha == "123"){
        echo "
            <script>
                alert('Seja bem-vindo!');
                window.location.href='http://localhost/BedeEscola/cadaaluno.php';
            </script>
    ";
    }

    else{
        echo "
            <script>
                alert('Usuario e senha incorretos');
            </script>
        ";

    }
?>