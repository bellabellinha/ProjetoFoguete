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
    </style>
</head>
<body>
    <h1>Ranking dos Foguetes <a href="{{route('welcome')}}">a</a></h1>
    <ol>
        @foreach($ranking as $resultado)
            <li>
                <span class="team-name">{{ $resultado->nome_equipe }}</span>
                <span class="score">{{ $resultado->distancia_percorrida }} m</span>
            </li>
        @endforeach
    </ol>
</body>
</html>
