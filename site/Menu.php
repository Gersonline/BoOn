<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">    
    <title>BoOn</title>
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
        <div class="site-branding" align="center">
        <a href="https://vemprafam.com.br/" class="custom-logo-link" rel="home"><img width="110" height="31" src="..\imagens\BoOn.png" class="custom-logo" alt="BoOn">
        </a>
    </div>
    <section class="">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Entrar</h3>
                    <div class="box">
                        <form action="login.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="usuario" name="text" class="input is-large" placeholder="Seu usuário" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Sua senha">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div align="center">
            <font color="navy">UM PROJETO DE ALUNOS DA FACULDADE:</font><br>
            <a href="https://vemprafam.com.br/" class="custom-logo-link" rel="home"><img width="110" height="31" src="..\imagens\logo-fam.png" class="custom-logo" alt="Fam">
            </a>
        </div>
    </section>
</body>

</html>
	