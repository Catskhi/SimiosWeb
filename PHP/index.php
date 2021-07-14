<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="bulma-import.css">
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
      <h1 class="titulo">Simios Web</h1>
      <main class="has-text-centered">
          <div class="box">
                <form action="system/login.php">
                    <div class="field">
                        <div class="control">
                            <input type="text" name="usuario" placeholder="Seu nome de usuário" class="input is-medium" autofocus="">
                        </div>
                    </div>

                    <div class="field">
                        <div class="control">
                            <input type="password" name="senha" placeholder="Sua senha" class="input is-medium" autofocus="">
                        </div>
                    </div>
                    <button type="submit" class="button is-link">Entrar</button>
                </form>
          </div>
      </main>
  </body>
</html>