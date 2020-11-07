var navItem = document.querySelectorAll('.nav-item') 
var container = document.querySelector('aside')
var logout = document.querySelector('#logout')



for(i=0;i<navItem.length;i++) {
    navItem[i].addEventListener('click', function(){
        if(this.value == 'Meus dados') {
            container.style.display = 'block'

        } else {
            alert('Essa feature ainda não está finalizada, aguarde o próximo update')
        }
    })
}

function fechar() {
    container.style.display = 'none'
}


logout.addEventListener('click', function() {
    window.location.href = "http://localhost/EcoRenda_v1.01/ecorenda/logcad.php"
})