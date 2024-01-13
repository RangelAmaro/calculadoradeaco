<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de aço para orçamento</title>
    <link rel="stylesheet" href="assets/main.css">
    <script src="assets/function.js"></script>
</head>

<body>
    <header>
        <img src="assets/logo-app.png" alt="Logo">
    </header>

    <label for="largura">Largura (mm):</label>
    <input type="number" id="largura" step="1" required>

    <label for="altura">Altura (mm):</label>
    <input type="number" id="altura" step="1" required>

    <label for="espessura">Espessura (mm):</label>
    <input type="number" id="espessura" step="0.1" required>

    <label for="valorKg">Valor do Kg do Aço:</label>
    <input type="number" id="valorKg" step="0.01" required>

    <button onclick="calcularPeso()">Calcular Peso</button>

    <div class="resultado">
        <p class="titulo-resultado" >Resultado</p>
        <div id="resultado">Faça o cálculo primeiro!</div>
    </div>

    <h2 class="titulo">Cálculo</h2>
    <p>Essa calculadora se baseia no <strong>Aço</strong> que tem uma densidade de <strong>7.85 gr/cm3</strong>. Peso = Área × Espessura × Densidade do Aço</p>

    <h2 class="titulo">Sobre o projeto</h2>
    <p>Esse projeto foi feito pelo <strong>Rangel Amaro</strong>, com intuito de agilizar orçamentos de chapas.</p>
    <p>Para maior compatibilidade ele foi feita para web. E o melhor de tudo <strong>ESTÁ LIVRE DE ANÚNCIOS CHATOS</strong>.</p>
    <span class="meu-email">Rangelamaro90@gmail.com</span>

</body>

</html>