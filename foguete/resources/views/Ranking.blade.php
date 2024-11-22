<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ranking</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #D2C3FF;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        height: 100vh;
        margin: 0;
    }

    h1 {
        color: #333;
        margin-bottom: 20px;
    }

    ol {
        background-color: #FFF;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        width: 300px;
    }

    li {
        margin: 10px 0;
        padding: 10px;
        border-radius: 5px;
        background-color: #E0E0E0;
        display: flex;
        justify-content: space-between;
    }

    .team-name {
        font-weight: bold;
    }

    .score {
        color: #7A5CFF;
    }

    /* Estilos para o botão "Voltar" */
    .btn-voltar {
        display: inline-block;
        padding: 10px 20px;
        background-color: #7A5CFF;
        color: white;
        font-size: 16px;
        font-weight: bold;
        text-decoration: none;
        border-radius: 5px;
        margin-top: 30px; /* Espaço acima do botão */
        text-align: center;
        transition: background-color 0.3s, transform 0.2s;
    }

    .btn-voltar:hover {
        background-color: #6949CC;
        transform: scale(1.05);
    }

    .btn-voltar:focus {
        outline: none;
    }
</style>
</head>
<body>
    <h1>Ranking dos Foguetes</h1>
    
    <!-- Lista de Ranking -->
    <ol>
        @foreach($ranking as $resultado)
            <li>
                <span class="team-name">{{ $resultado->nome_equipe }}</span>
                <span class="score">{{ $resultado->distancia_percorrida }} m</span>
            </li>
        @endforeach
    </ol>

    <!-- Botão Voltar estilizado -->
    <a href="{{ route('welcome') }}" class="btn-voltar">Retornar</a>
</body>
</html>
