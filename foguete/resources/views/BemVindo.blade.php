<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/BemVindo.css')}}">
    <link rel="shortcut icon" href="{{ asset('img/foguete.jfif')}}">
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@300;400;500;600;700;800;900&family=Julius+Sans+One&display=swap" rel="stylesheet">

    <style>
        body{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            height: 100vh;
            background-color: #D2C3FF;
        }
        body div{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;

        }
        img{
            width: 200px;
            height: 150px;
        }
        h1{
            font-family: "Inknut Antiqua", serif;
            font-weight: 500;
            font-style: normal;
        }
        h2{
            font-family: "Julius Sans One", sans-serif;
            font-weight: 400;
            font-style: normal;

        }
    </style>
</head>
<body>
    <img src="{{asset('img/foguete.jfif')}}" alt="">
    <div>
    <h1>Equation</h1>
    <h2>Engine</h2>
    <style>
    h1, h2 {
        margin: 0;  /* Remove a margem padrão */
    }

    h1 {
        font-size: 2em;  /* Tamanho do texto do <h1> */
    }

    h2 {
        font-size: 1em;  /* Tamanho do texto do <h2> */
        margin-top: 0px;  /* Ajusta o espaço superior do <h2> para aproximá-lo do <h1> */
        margin-bottom: 20px;  /* Adiciona um espaço abaixo do <h2> */
    }
</style>
<button onclick="window.location.href='{{ url('/calculadora')}}'" class="btn-continuar">Continuar</button>

<style>
    .btn-continuar {
        padding: 12px 25px;  /* Espaco dentro do botão */
        background-color: #6A5ACD;  /* Cor de fundo do botão */
        color: white;  /* Cor do texto */
        font-size: 16px;  /* Tamanho da fonte */
        border: none;  /* Remove a borda padrão */
        border-radius: 5px;  /* Bordas arredondadas */
        cursor: pointer;  /* Cursor de "mão" ao passar sobre o botão */
        text-align: center;  /* Centraliza o texto */
        font-weight: bold;  /* Torna o texto mais forte */
        transition: background-color 0.3s, transform 0.2s;  /* Efeito de transição suave */
    }

    .btn-continuar:hover {
        background-color: #45a049;  /* Cor de fundo mais escura ao passar o mouse */
        transform: scale(1.05);  /* Aumenta o tamanho do botão ao passar o mouse */
    }

    .btn-continuar:focus {
        outline: none;  /* Remove o contorno quando o botão é clicado */
    }
</style>

    
    </div>
    
</body>
</html>