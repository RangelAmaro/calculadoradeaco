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

    <label class="label-form">Altura (mm):</label>
    <div class="input-total input-preto">
        <span class="icon-input"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5" />
            </svg></span>
        <input type="number" id="altura" step="1" placeholder="digite a altura" required>
    </div>

    <label class="label-form">Largura (mm):</label>
    <div class="input-total input-preto">
        <span class="icon-input">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
            </svg>
        </span>
        <input type="number" id="largura" step="1" placeholder="digite a largura" required>
    </div>

    <label class="label-form">Espessura (mm):</label>
    <div class="input-total input-azul">
        <span class="icon-input">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 8M7.646.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 1.707V5.5a.5.5 0 0 1-1 0V1.707L6.354 2.854a.5.5 0 1 1-.708-.708zM8 10a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 14.293V10.5A.5.5 0 0 1 8 10" />
            </svg>
        </span>
        <input type="number" id="espessura" step="0.1" placeholder="digite a espessura" required>
    </div>

    <div class="atalho-total">
        <span class="setas-atalho">
            <</span>
                <div class="atalhos">
                    <div id="1-espessura">#</div>
                    <div id="2-espessura">#</div>
                    <div id="3-espessura">#</div>
                    <div id="4-espessura">#</div>
                    <div id="5-espessura">#</div>
                    <div id="6-espessura">#</div>
                    <div id="7-espessura">#</div>
                    <div id="8-espessura">#</div>
                </div>
                <span class="setas-atalho">></span>
    </div>

    <label class="label-form">Valor por quilo:</label>
    <div class="input-total input-verde">
        <span class="icon-input">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518z" />
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11m0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12" />
            </svg>
        </span>
        <input type="number" id="valorKg" step="0.01" placeholder="digite o valor" required>
    </div>

    <div class="atalho-total">
        <span class="setas-atalho">
            <</span>
                <div class="atalhos">
                    <div id="1-valorKg">*</div>
                    <div id="2-valorKg">*</div>
                    <div id="3-valorKg">*</div>
                    <div id="4-valorKg">*</div>
                    <div id="5-valorKg">*</div>
                    <div id="6-valorKg">*</div>
                    <div id="7-valorKg">*</div>
                    <div id="8-valorKg">*</div>
                </div>
                <span class="setas-atalho">></span>
    </div>

    <div class="acoes">
        <div class="limpar-tela"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0" />
            </svg></div>
        <button class="calcular-btn" onclick="calcularPeso()">CALCULAR</button>
    </div>

    <div class="resultado">
        <p class="titulo-resultado">Resultado</p>
        <div id="resultado">Faça o cálculo primeiro!</div>
    </div>

    <h2 class="titulo">Cálculo</h2>
    <p>Essa calculadora se baseia no <strong>Aço</strong> que tem uma densidade de <strong>7.85 gr/cm3</strong>. Peso = Área × Espessura × Densidade do Aço</p>

    <h2 class="titulo">Sobre o projeto</h2>
    <p>Esse projeto foi feito pelo <strong>Rangel Amaro</strong>, com intuito de agilizar orçamentos de chapas.</p>
    <p>Para maior compatibilidade ele foi feita para web. E o melhor de tudo <strong>ESTÁ LIVRE DE ANÚNCIOS CHATOS</strong>.</p>
    <span class="meu-email">Rangelamaro90@gmail.com</span>


    <script src="assets/atalhos.js"></script>
</body>

</html>