<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <style>
        body{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            height: 100vh;
            background-color: #D2C3FF;
        }
        body form{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            
        }
        img{
            width: 200px;
            height: 200px;
        }
        input {
        width: 100%;
        padding: 10px;
        margin: 8px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }

    input:focus {
        outline: none;
        border-color: #7A5CFF;
        box-shadow: 0 0 5px rgba(122, 92, 255, 0.5);
    }

    button {
        width: 100%;
        padding: 10px;
        margin-top: 15px;
        background-color: #7A5CFF;
        color: white;
        font-size: 16px;
        font-weight: bold;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #6949CC;
    }
    </style>
</head>
<body>
    <img src="{{asset('img/foguete.jfif')}}" alt="">
    <form action="{{ route('resultado') }}" method="POST">
    @csrf 
    <input type="number" name="vinagre" placeholder="Quantidade de vinagre" required>
    <input type="number" name="bicarbonato" placeholder="Quantidade de bicarbonato" required>
    <input type="number" name="peso" placeholder="Peso" required>
    <input type="text" name="equipe" placeholder="Nome da sua equipe" required>
    <button type="submit">Lançar Foguete</button>
</form>
</body>
</html>