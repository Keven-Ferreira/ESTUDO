function carregar(){
    var msg = document.querySelector('#p1');
    var p2 = document.querySelector('#p2')
    var img = document.querySelector('#imagem');
    var data = new Date()
    var hora = data.getHours();
    //hora = 15
    p1.innerHTML = `Agora são ${hora} horas`

    if(hora >= 0 && hora <= 12){
        //Bom dia
        img.src ='manha.png'
        p2.innerHTML = 'Bom dia!'
        document.body.style.background = '#9ea0aa'
    } else if(hora <= 18){
        p2.innerHTML= 'Boa tarde!'
        img.src = 'tarde.png'
        document.body.style.background = '#97a7bc'
    } else {
        //Boa noite
        img.src = 'noite.png'
        document.body.style.background = '#001838'
        p2.innerHTML='Boa noite!'
    }
}