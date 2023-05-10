<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <main>
        <div class="box">
            <div class="inner-box">
                <div class="forms-wrap">
                    <<form id="" action="acesssarsistema.php" autocomplete="off" class="sign-in-form" method="POST">

                            <div class="heading">
                                <div class="logo">
                                    <img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/160/apple/118/school_1f3eb.png" alt="easyclass" />
                                  </div>
                                <h2>Bem vindo ao sistema de gestão</h2>
                                <h6>Escola NSA Junior</h6>
                            </div>

                            <div class="actual-form">
                                <div class="input-wrap">
                                    <input type="text" name="cxuser" class="input-field" autocomplete="off" required>
                                    <label>Login</label>
                                </div>

                                <div class="input-wrap">
                                    <input type="password" name="cxsenha" class="input-field" autocomplete="off" required>
                                    <label>Senha</label>
                                </div>
                            
                                <input type="submit" value="Entrar" class="sign-btn">
                        </div>
                    </form>
            </div>
        </div>
    </main>

    <script src="app.js"></script>
</body>
</html>