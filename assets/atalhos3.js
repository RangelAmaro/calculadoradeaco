// Atalhos espessura
document.getElementById('1-espessura').addEventListener('click', function () {
    var espessuraInput = document.getElementById('espessura');
    espessuraInput.value = '0.9';
});
document.getElementById('2-espessura').addEventListener('click', function () {
    var espessuraInput = document.getElementById('espessura');
    espessuraInput.value = '1.2';
});
document.getElementById('3-espessura').addEventListener('click', function () {
    var espessuraInput = document.getElementById('espessura');
    espessuraInput.value = '1.5';
});
document.getElementById('4-espessura').addEventListener('click', function () {
    var espessuraInput = document.getElementById('espessura');
    espessuraInput.value = '2';
});
document.getElementById('5-espessura').addEventListener('click', function () {
    var espessuraInput = document.getElementById('espessura');
    espessuraInput.value = '2.65';
});
document.getElementById('6-espessura').addEventListener('click', function () {
    var espessuraInput = document.getElementById('espessura');
    espessuraInput.value = '3.18';
});
document.getElementById('7-espessura').addEventListener('click', function () {
    var espessuraInput = document.getElementById('espessura');
    espessuraInput.value = '4.75';
});
document.getElementById('8-espessura').addEventListener('click', function () {
    var espessuraInput = document.getElementById('espessura');
    espessuraInput.value = '6.35';
});
document.getElementById('9-espessura').addEventListener('click', function () {
    var espessuraInput = document.getElementById('espessura');
    espessuraInput.value = '7.94';
});
document.getElementById('10-espessura').addEventListener('click', function () {
    var espessuraInput = document.getElementById('espessura');
    espessuraInput.value = '9.53';
});
document.getElementById('11-espessura').addEventListener('click', function () {
    var espessuraInput = document.getElementById('espessura');
    espessuraInput.value = '12.7';
});
document.getElementById('12-espessura').addEventListener('click', function () {
    var espessuraInput = document.getElementById('espessura');
    espessuraInput.value = '15.88';
});
document.getElementById('13-espessura').addEventListener('click', function () {
    var espessuraInput = document.getElementById('espessura');
    espessuraInput.value = '19.05';
});
document.getElementById('14-espessura').addEventListener('click', function () {
    var espessuraInput = document.getElementById('espessura');
    espessuraInput.value = '2.25';
});



// Atalho valor do KG
document.getElementById('1-valorKg').addEventListener('click', function () {
    var valorKgInput = document.getElementById('valorKg');
    valorKgInput.value = '16';
});
document.getElementById('2-valorKg').addEventListener('click', function () {
    var valorKgInput = document.getElementById('valorKg');
    valorKgInput.value = '18';
});
document.getElementById('3-valorKg').addEventListener('click', function () {
    var valorKgInput = document.getElementById('valorKg');
    valorKgInput.value = '75';
});
document.getElementById('4-valorKg').addEventListener('click', function () {
    var valorKgInput = document.getElementById('valorKg');
    valorKgInput.value = '77';
});
document.getElementById('5-valorKg').addEventListener('click', function () {
    var valorKgInput = document.getElementById('valorKg');
    valorKgInput.value = '14';
});
document.getElementById('6-valorKg').addEventListener('click', function () {
    var valorKgInput = document.getElementById('valorKg');
    valorKgInput.value = '6';
});
document.getElementById('7-valorKg').addEventListener('click', function () {
    var valorKgInput = document.getElementById('valorKg');
    valorKgInput.value = '7';
});
document.getElementById('8-valorKg').addEventListener('click', function () {
    var valorKgInput = document.getElementById('valorKg');
    valorKgInput.value = '8';
});

// Limpar valores input

function limparTela(){
    var input1 = document.getElementById('altura');
    var input2 = document.getElementById('largura');
    var input3 = document.getElementById('espessura');
    var input4 = document.getElementById('valorKg');

    input1.value = '';
    input2.value = '';
    input3.value = '';
    input4.value = '';

    document.getElementById('resultado').innerHTML = 'Faça o cálculo primeiro!';
}
