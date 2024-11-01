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
            height: 200px;
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
    <a href="{{url('/calculadora')}}">Continuar</a>
    </div>
</body>
</html>