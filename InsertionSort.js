function criaNumero(){
    hora = new Date();
    horaFormatada = ("0" + hora.getHours()).slice(-2) + ':' + ("0" + hora.getMinutes()).slice(-2) + ':' + ("0" + hora.getSeconds()).slice(-2);
    tamanhoTabela = $('#tabelaRandomMicro tr').length-1;
    tamanhoTabelaOrdenada = $('#tabelaOrdenadaMicro tr').length-1;
    $('#relatorio').append(horaFormatada + ' -> Início da remoção de ' + (tamanhoTabela + tamanhoTabelaOrdenada) + ' números<br>');
    var inicioRemocaoRegistros = new Date();
    //limpa tabelas
    $("#tabelaRandomMicro tr").remove();
    $("#tabelaOrdenadaMicro tr").remove();
    $("#tabelaOrdenadaMicro>tbody").append("<tr><th scope='row'>Qtd</th><td><b>Ordenados</b></td></tr>");//adiciona cabeçalho
    $("#tabelaRandomMicro>tbody").append("<tr><th scope='row'>Qtd</th><td><b>Números</b></td></tr>");
    //fim limpa tabelas
    tempoRemocaoRegistros = new Date() - inicioRemocaoRegistros;
    hora = new Date();
    horaFormatada = ("0" + hora.getHours()).slice(-2) + ':' + ("0" + hora.getMinutes()).slice(-2) + ':' + ("0" + hora.getSeconds()).slice(-2);
    $('#relatorio').append(horaFormatada + ' -> Fim da remoção de ' + (tamanhoTabela + tamanhoTabelaOrdenada) + ' números<br>');
    $('#relatorio').append('Tempo de remoção dos registros: ' + tempoRemocaoRegistros + 'ms<br>');

    hora = new Date();
    horaFormatada = ("0" + hora.getHours()).slice(-2) + ':' + ("0" + hora.getMinutes()).slice(-2) + ':' + ("0" + hora.getSeconds()).slice(-2);
    $('#relatorio').append(horaFormatada + ' -> Início da criação de ' + $('#numero').val() + ' números<br>');
    var inicioCriacaoNumeros = new Date();
    //início criação
    numero = $('#numero').val();
    var array = [];
    for (i=0; i < numero; i++){
        array.push(i);
    }
    shuffledArray = array.sort(() => 0.5 - Math.random());//randomiza números no array
    for (i=0; i < numero; i++){//popula tabela
        $("#tabelaRandomMicro>tbody").append("<tr><th scope='row'>"+(i+1)+"</th><td>"+shuffledArray[i]+"</td></tr>");
    }
    //fim criação
    tempoCriacaoNumeros = new Date() - inicioCriacaoNumeros;
    hora = new Date();
    horaFormatada = ("0" + hora.getHours()).slice(-2) + ':' + ("0" + hora.getMinutes()).slice(-2) + ':' + ("0" + hora.getSeconds()).slice(-2);
    $('#relatorio').append(horaFormatada + ' -> Fim da criação de ' + $('#numero').val() + ' números<br>');
    $('#relatorio').append('Tempo de criação dos números: ' + tempoCriacaoNumeros + 'ms<br>');
}

function InsertionSort(shuffledArray){
    tamanhoTabelaOrdenada = $('#tabelaOrdenadaMicro tr').length-1;
    hora = new Date();
    horaFormatada = ("0" + hora.getHours()).slice(-2) + ':' + ("0" + hora.getMinutes()).slice(-2) + ':' + ("0" + hora.getSeconds()).slice(-2);
    $('#relatorio').append(horaFormatada + ' -> Início da remoção de ' + tamanhoTabelaOrdenada + ' números ordenados<br>');
    var inicioRemocaoRegistros = new Date();
    //remoção registros
    $("#tabelaOrdenadaMicro tr").remove();
    $("#tabelaOrdenadaMicro>tbody").append("<tr><th scope='row'>Qtd</th><td><b>Ordenados</b></td></tr>");
    //fim remoção registros
    tempoRemocaoRegistrosOrdenados = new Date() - inicioRemocaoRegistros;
    hora = new Date();
    horaFormatada = ("0" + hora.getHours()).slice(-2) + ':' + ("0" + hora.getMinutes()).slice(-2) + ':' + ("0" + hora.getSeconds()).slice(-2);
    $('#relatorio').append(horaFormatada + ' -> Fim da remoção de ' + tamanhoTabelaOrdenada + ' números ordenados<br>');
    $('#relatorio').append('Tempo de remoção dos registros ordenados: ' + tempoRemocaoRegistrosOrdenados + 'ms<br>');

    hora = new Date();
    horaFormatada = ("0" + hora.getHours()).slice(-2) + ':' + ("0" + hora.getMinutes()).slice(-2) + ':' + ("0" + hora.getSeconds()).slice(-2);
    $('#relatorio').append(horaFormatada + ' -> Início da ordenação de ' + ($('#tabelaRandomMicro tr').length-1) + ' números<br>');
    var inicioOrdenacaoNumeros = new Date();
   //ordenação
   let length = shuffledArray.length;
   for (let i = 1; i < length; i++) {
       let key = shuffledArray[i];
       let j = i - 1;
       while (j >= 0 && shuffledArray[j] > key) {
           shuffledArray[j + 1] = shuffledArray[j];
           j = j - 1;
       }
       shuffledArray[j + 1] = key;
   }
    for (i=0; i < numero; i++){//popula tabela
        $("#tabelaOrdenadaMicro>tbody").append("<tr><th scope='row'>"+(i+1)+"</th><td>"+shuffledArray[i]+"</td></tr>");
    }
    //fim ordenação
    tempoOrdenacaoNumeros = new Date() - inicioOrdenacaoNumeros;
    hora = new Date();
    horaFormatada = ("0" + hora.getHours()).slice(-2) + ':' + ("0" + hora.getMinutes()).slice(-2) + ':' + ("0" + hora.getSeconds()).slice(-2);
    $('#relatorio').append(horaFormatada + ' -> Fim da ordenação de ' + ($('#tabelaRandomMicro tr').length-1) + ' números<br>');
    $('#relatorio').append('Tempo de ordenção dos números: ' + tempoOrdenacaoNumeros + 'ms<br>');
};

function limparRelatorio(){
    $('#relatorio').html('');
}