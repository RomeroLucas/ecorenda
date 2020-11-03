var btns = document.querySelectorAll('span')
var forms = document.querySelectorAll('.forms')
var subtitle = document.querySelector('h4')

console.log(btns, forms)

for(i=0; i<btns.length; i++) {
    btns[i].addEventListener('click', function() {
        if(this.textContent == '<') {
            forms[0].classList.remove('no-display')
            forms[1].classList.add('no-display')
            subtitle.textContent = 'Login'
        } else {
            forms[0].classList.add('no-display')
            forms[1].classList.remove('no-display')
            subtitle.textContent = 'Cadastro'
        }
    })
}

