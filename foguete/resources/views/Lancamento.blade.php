<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Documento</title>
<style>
    body {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start; /* Alinha os itens no topo */
        height: 100vh;
        margin: 0;
        background-color: #D2C3FF;
        font-family: Arial, sans-serif;
        text-align: center; /* Centraliza o texto no corpo */
        padding-top: 330px; /* Espaço superior para distanciar do topo */
    }

    h1 {
        font-size: 24px; /* Tamanho da fonte do título */
        color: #333; /* Cor do texto do título */
        margin-bottom: 10px; /* Espaço abaixo do título */
    }

    a {
        text-decoration: none; /* Remove o sublinhado do link */
        background-color: #7A5CFF; /* Cor de fundo do link */
        color: white; /* Cor do texto do link */
        padding: 10px 20px; /* Espaçamento interno do link */
        border-radius: 5px; /* Bordas arredondadas */
        font-size: 16px; /* Tamanho da fonte do link */
        transition: background-color 0.3s; /* Transição suave para hover */
        margin-top: 10px; /* Espaço entre os botões */
    }

    a:hover {
        background-color: #6949CC; /* Cor de fundo do link ao passar o mouse */
    }

    /* Adicionando as animações */
    .container {
        position: absolute; /* Posiciona o foguete de forma absoluta */
        top: -5%; /* Coloca o foguete mais centralizado na tela */
        width: 100%;
        height: 50%; /* Deixe um espaço suficiente para a animação */
        display: flex;
        justify-content: center; /* Centraliza a animação horizontalmente */
    }

    .imagem-voando {
        position: absolute;
        width: 200px;  /* Tamanho da imagem */
        animation: voando 1s ease-in-out forwards; /* Reduzi o tempo para 2s */
    }

    /* Animação de voo da imagem (subindo e saindo da tela) */
    @keyframes voando {
        0% {
            left: 45%;
            bottom: 0%;
            transform: rotate(10deg);
        }
        100% {
            left: 45%;
            bottom: 100%;
            transform: rotate(0deg);
            opacity: 0; /* A imagem desaparece ao sair da tela */
        }
    }
    
</style>
</head>
<body>
    <!-- Colocando a animação mais centralizada na tela -->
    <div class="container">
        <!-- Imagem com animação -->
        <img src="{{ asset('img/foguete.jfif') }}" alt="Foguete" class="imagem-voando">
    </div>

    <!-- Título -->
    <h1>Distância Percorrida: {{ session('distancia', '0') }} metros</h1>

    <!-- Botões -->
    <a href="{{ route('calculadora') }}">Lançar Próximo Foguete</a>
    <br>
    <a href="{{ route('ranking') }}">Ranking</a>
</body>
</html>
