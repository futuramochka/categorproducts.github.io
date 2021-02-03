var buttonProduct = document.querySelectorAll('.products__button');
var ModalForm = document.querySelector('.form');
var buttonToggle = document.querySelector('.form__toggle');

for(var i = 0; i < buttonProduct.length; i++){
    buttonProduct[i].addEventListener('click', function(){
        ModalForm.style.display = 'block';
    })
}

buttonToggle.addEventListener('click', function(){
    ModalForm.style.display = 'none';
})