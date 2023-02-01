function tabuada(){
    var txtNum = document.querySelector('#txtNum')
    var res = ''
    var tab = 0
    var lista = document.querySelector('#lista')
    if(txtNum.value.length != 0){
        txtNum = Number(txtNum.value)
        lista.innerHTML = ''
        for(var c = 1; c <= 10; c++){
            let item = document.createElement('option')
            item.text=`${txtNum} x ${c} = ${txtNum*c}`
            item.value = `tab${c}`
            lista.appendChild(item)
            //`${txtNum} x ${c} = ${tab} <br>`
        }   
    } else{
        alert('Por favor, digite um número!');
    }
}