<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
     body {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
        background-color: #D2C3FF;
        font-family: Arial, sans-serif;
        text-align: center; /* Centraliza o texto no corpo */
    }

    h1 {
        font-size: 24px; /* Tamanho da fonte do título */
        color: #333; /* Cor do texto do título */
        margin-bottom: 20px; /* Espaço abaixo do título */
    }

    .animacao {
        width: 100%;
        height: 200px; /* Altura para a área de animação */
        background-color: #E0E0E0; /* Cor de fundo da animação */
        border-radius: 10px; /* Bordas arredondadas */
        margin-bottom: 20px; /* Espaço abaixo da animação */
    }

    a {
        text-decoration: none; /* Remove o sublinhado do link */
        background-color: #7A5CFF; /* Cor de fundo do link */
        color: white; /* Cor do texto do link */
        padding: 10px 20px; /* Espaçamento interno do link */
        border-radius: 5px; /* Bordas arredondadas */
        font-size: 16px; /* Tamanho da fonte do link */
        transition: background-color 0.3s; /* Transição suave para hover */
    }

    a:hover {
        background-color: #6949CC; /* Cor de fundo do link ao passar o mouse */
    }
    </style>
</head>
<body>
    <h1>Distância Percorrida: {{ session('distancia', '0') }} metros</h1>
    <div class="animacao"></div>
    <a href="{{ route('calculadora') }}">Lançar Próximo Foguete</a>
    <br>
    <a href="{{ route('ranking') }}">Ranking</a>
</body>
</html>