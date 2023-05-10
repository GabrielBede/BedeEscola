<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Aluno</title>
    <link rel="stylesheet" href="./css/cadaaluno.css">
</head>
<body>
    <main>
        <div class="box">
            <div class="inner-box">
                <div class="forms-wrap">
                    <form id="" action="inseriraluno.php" method="POST" autocomplete="off" class="sign-in-form">    

                            <div class="heading">
                                <div class="logo">
                                    <img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/160/apple/118/school_1f3eb.png" alt="easyclass" />
                                  </div>
                                <h2>Cadastrar Aluno</h2>
                            </div>

                            <div class="actual-form">
                                <div class="input-wrap">
                                    <input type="text" name="cxaluno" class="input-field" autocomplete="off" required>
                                    <label>Aluno</label>
                                </div>

                                <div class="input-wrap">
                                    <input type="email" name="cxemail" class="input-field" autocomplete="off" required>
                                    <label>E-mail</label>
                                </div>

                                <div class="input-wrap">
                                    <input type="text" name="cxfone" maxlength="11" class="input-field" autocomplete="off" required>
                                    <label>Telefone</label>
                                </div>

                                <div class="input-wrap">
                                    <input type="text" name="cxcpf" maxlength="11" class="input-field" autocomplete="off" required>
                                    <label>CPF</label>
                                </div>
                            
                                <input type="submit" value="Cadastrar" class="sign-btn">
                        </div>
                    </form>
            </div>
        </div>
    </main>

    <script src="app.js"></script>
</body>
</html>