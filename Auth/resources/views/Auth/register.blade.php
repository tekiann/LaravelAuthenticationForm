<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}"></script>
    <title>Register</title>
</head>
<body>
    <div class="wrapper">
		<div id="holder">

			<form action="{{ route('registrar_usuario') }}" method="post">
                @csrf
				<h1 class="center">Cadastrar</h1>

				<div class="input center">
					<input id="name" type="text" placeholder="Nome Completo" name="nameUser">
				</div>
				<div class="input center">
                    <input id="email" type="text" placeholder="Email" name="emailUser">
				</div>
				<div class="input center">
					<input id="pwd1" type="password" placeholder="Senha" name="pwdUser">
                </div>


                <br>
                <br>
                <button type='submit' id="btn1">Criar conta</button>
                <br>
                <a class="center" href="../">
                    <p>Já possui uma conta?</p>
                </a>

			</form>
			<div class="displayNone"></div>



		</div>
	</div>
</body>
</html>
