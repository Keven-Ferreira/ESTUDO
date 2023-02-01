function contar(){
    //declaração de variáveis.
    var nunIni = document.querySelector('#nunIni')
    var numFim = document.querySelector('#numFim')
    var numPasso = document.querySelector('#numPasso')
    var contagem = document.querySelector('#contagem')
    var txtres = '';
    if(nunIni.value == '' || numFim.value == ''){
        //caso falte o elemento inicio ou o elemento final.
        contagem.innerHTML = 'Impossível contar! <br> Por favor, digite um valor válido!'
    }else {
        //conversão de valores para valores numéricos.
    nunIni = Number(nunIni.value)
    numFim = Number(numFim.value)
    numPasso = Number(numPasso.value)

    
    if(numPasso == 0){
        //caso o numero de passo seja igual, ele se tornará na contagem 1
        alert('Numero passo igual 0, usando numero 1')
        numPasso = 1;
    }
    if (nunIni == numFim){
        //caso o numero de inicio seja igual ao número final.
        //será solicitado alterar um dos valores.
        txtres = 'Por favor digite um numero de começo diferente do numero final!'
    } else if(nunIni < numFim){
        while(nunIni <= numFim){
            //contagem crecente
            txtres = txtres + String(nunIni) + ' 👉 ';
            nunIni = Number(nunIni);
            nunIni = nunIni + numPasso;
            
        }
    } else if( nunIni > numFim){
        while(nunIni >= numFim){
            //contagem regressiva
            txtres = txtres + String(nunIni) + ' 👉 ';
            nunIni = Number(nunIni);
            nunIni = nunIni - numPasso;
        }
    }
    //acrescentação da 🏴 no final do resultado
    txtres = txtres + ' 🏴'
    //Mostrando o resultado na tela.
    contagem.innerHTML = 'Contando: <br>'+txtres;
    }
}