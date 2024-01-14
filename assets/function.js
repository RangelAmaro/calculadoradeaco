function calcularPeso() {
    var largura = parseFloat(document.getElementById('largura').value);
    var altura = parseFloat(document.getElementById('altura').value);
    var espessura = parseFloat(document.getElementById('espessura').value);
    var valorKg = parseFloat(document.getElementById('valorKg').value);

    if (isNaN(largura) || isNaN(altura) || isNaN(espessura) || isNaN(valorKg)) {
        alert('Por favor, insira valores válidos para largura, altura, espessura e valor do Kg do aço.');
        return;
    }

    var densidadeAco = 7850; // kg/m³
    var area = (largura / 1000) * (altura / 1000); // Convertendo para metros
    var peso = area * espessura / 1000 * densidadeAco; // Convertendo para gramas

    var valorTotal = peso * valorKg; // Convertendo para quilogramas e calculando o valor total

    document.getElementById('resultado').innerHTML = 'Peso da chapa de aço: ' + peso.toFixed(2) + ' g<br>';
    document.getElementById('resultado').innerHTML += 'Valor total: R$ ' + valorTotal.toFixed(2);
}