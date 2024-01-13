<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de aço para orçamento</title>
    <link rel="stylesheet" href="assets/main.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            margin-bottom: 10px;
        }

        button {
            padding: 5px 10px;
            font-size: 14px;
            cursor: pointer;
        }

        #resultado {
            margin-top: 20px;
        }
    </style>
    <script src="assets/function.js"></script>
</head>

<body>
    <header></header>

    <label for="largura">Largura (mm):</label>
    <input type="number" id="largura" step="1" required>

    <label for="altura">Altura (mm):</label>
    <input type="number" id="altura" step="1" required>

    <label for="espessura">Espessura (mm):</label>
    <input type="number" id="espessura" step="0.1" required>

    <label for="valorKg">Valor do Kg do Aço:</label>
    <input type="number" id="valorKg" step="0.01" required>

    <button onclick="calcularPeso()">Calcular Peso</button>

    <div id="resultado"></div>

</body>

</html>