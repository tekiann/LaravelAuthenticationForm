<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">


    <title>Login</title>

</head>
<body>


    <div class="wrapper">
        <div id="holder">

            <form action="{{ route('AuthUser') }}" method="post">
                @csrf
                <h1 class="center">Login</h1>
                <div class="input center">
                <input type="text" name="email" placeholder="Email">

                </div>
                <div class="input center">

                <input type="password"name="password" placeholder="Senha">
                </div>
                <br>
                <br>
                <button>Entrar</button>
                <br>
                <a id="link1" href="/register"><p>Criar uma conta?</p></a>
                <a id="link2" href="#"><p>Esqueceu sua senha?</p></a>
            </form>
        </div>
    </div>
</html>
