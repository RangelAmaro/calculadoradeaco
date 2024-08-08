function calcularPeso() {
    var largura = parseFloat(document.getElementById('largura').value);
    var altura = parseFloat(document.getElementById('altura').value);
    var espessura = parseFloat(document.getElementById('espessura').value);
    var valorKg = parseFloat(document.getElementById('valorKg').value);
    var larguraSobremetal = largura + 5
    var alturaSobremetal = altura + 5

    if (isNaN(largura) || isNaN(altura) || isNaN(espessura) || isNaN(valorKg)) {
        alert('Por favor, insira valores válidos!');
        return;
    }

    var densidadeAco = 2730; // kg/m³
    var area = (larguraSobremetal / 1000) * (alturaSobremetal / 1000); // Convertendo para metros
    var peso = area * espessura / 1000 * densidadeAco; // Convertendo para gramas

    var valorTotal = peso * valorKg; // Convertendo para quilogramas e calculando o valor total

    // Substitui o ponto pelo caractere de vírgula no valorTotal
    var valorFormatado = valorTotal.toFixed(2).replace('.', ',');

    // Exibe o valor formatado na página
    document.getElementById('resultado').innerHTML = 'Peso: ' + peso.toFixed(3).replace('.', ',') + ' Kg<br>';
    document.getElementById('resultado').innerHTML += 'Valor: <strong>R$ ' + valorFormatado + '</strong>';
    document.getElementById('resultado').innerHTML += '<table><tbody><tr><th style="text-align:left;">Peça</th><th style="text-align:left;">Espessura</th><th style="text-align:left;">Largura</th><th style="text-align:left;">Altura</th><th style="text-align:left;">Peso</th><th style="text-align:left;">Preço</th></tr><tr><td>' + altura + 'mm X ' + largura + 'mm</td><td>#' + espessura + 'mm </td><td>' + largura + '</td><td>' + altura + '</td><td>' + peso.toFixed(3).replace('.', ',') + '</td><td>' + valorFormatado + '</td></tr></tbody></table>';
}
