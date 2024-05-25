<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portfólio - Wesley Fuchs Garcia</title>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <style>
        :root {
            --cor-fundo-box: rgba(255, 255, 255, 0.1);
            --cor-texto: #333;
            --cor-fundo-sobre: #f5f5dc;
            --sombra-box: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
            background-image: url('./imagem/foto2.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            margin: 0;
            font-family: 'PT Sans', sans-serif;
        }

        #box {
            padding: 20px;
            border: 1px solid #6f6363;
            border-radius: 10px;
            display: flex;
            flex-direction: row;
            min-width: 800px;
            backdrop-filter: blur(3px);
            box-shadow: var(--sombra-box);
            background-color: var(--cor-fundo-box);
        }

        #left, #right {
            padding: 10px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        #left {
            align-items: center;
        }

        #right {
            min-width: 350px;
            max-width: 400px;
        }

        h1 {
            text-align: center;
            font-family: 'PT Sans', sans-serif;
            background-color: var(--cor-fundo-sobre);
            padding: 10px;
            border-radius: 5px;
            color: var(--cor-texto);
            margin: 0 0 10px;
        }

        .sobre {
            font-family: 'Comfortaa', sans-serif;
            background-color: var(--cor-fundo-sobre);
            padding: 10px;
            margin-top: 10px;
            border-radius: 5px;
            color: var(--cor-texto);
        }

        #foto {
            width: 200px;
            height: 200px;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <div id="box">
        <div id="left">
            <img id="foto" src="./imagem/foto.png" alt="Foto Pessoal">
        </div>
        <div id="right">
            <h1>Sobre mim...</h1>
            <div class="sobre">
                Olá! Meu nome é Wesley Fuchs Garcia, tenho 27 anos;
            </div>
            <div class="sobre">
                Atualmente estou me aperfeiçoando no mundo da informática;
            </div>
            <div class="sobre">
                Mas anteriormente já cursei Direito e também Filosofia;
            </div>
            <div class="sobre">
                Mas vi que minha paixão é computadores e o mundo virtual;
            </div>
            <div class="sobre">
                E por isso escolhi aprender cada vez mais.
            </div>
        </div>
    </div>
</body>
</html>
