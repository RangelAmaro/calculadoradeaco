function calcularPeso() {
    var largura = parseFloat(document.getElementById('largura').value);
    var altura = parseFloat(document.getElementById('altura').value);
    var espessura = parseFloat(document.getElementById('espessura').value);
    var valorKg = parseFloat(document.getElementById('valorKg').value);

    if (isNaN(largura) || isNaN(altura) || isNaN(espessura) || isNaN(valorKg)) {
        alert('Por favor, insira valores válidos!');
        return;
    }

    var densidadeAco = 7850; // kg/m³
    var area = (largura / 1000) * (altura / 1000); // Convertendo para metros
    var peso = area * espessura / 1000 * densidadeAco; // Convertendo para gramas

    var valorTotal = peso * valorKg; // Convertendo para quilogramas e calculando o valor total

    // Substitui o ponto pelo caractere de vírgula no valorTotal
    var valorFormatado = valorTotal.toFixed(2).replace('.', ',');

    // Exibe o valor formatado na página
    document.getElementById('resultado').innerHTML = 'Peso: ' + peso.toFixed(2) + ' Kg<br>';
    document.getElementById('resultado').innerHTML += 'Valor: <strong>R$ ' + valorFormatado + '</strong>';
}