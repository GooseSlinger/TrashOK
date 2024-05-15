import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

let firstStepAuth = document.getElementById('firstStageAuth');
let mainAuthBtn = document.getElementById('mainAuthBtn');
let secondStepAuth = document.getElementById('secondStageAuth');
let thirdStepAuth = document.getElementById('thirdStageAuth');
let btnFirstStepAuth = document.getElementById('btnContinueStep1');
let btnSecondStepAuth = document.getElementById('btnContinueStep2');

btnFirstStepAuth.addEventListener('click', function() {
    firstStepAuth.classList.add('hide');
    secondStepAuth.classList.remove('hide');
    secondStepAuth.classList.add('show');
});

btnSecondStepAuth.addEventListener('click', function() {
    secondStepAuth.classList.remove('show');
    secondStepAuth.classList.add('hide');
    thirdStepAuth.classList.remove('hide');
    thirdStepAuth.classList.add('show');
});

mainAuthBtn.addEventListener('click', function() {
    thirdStepAuth.classList.add('hide');
    thirdStepAuth.classList.remove('show');
    firstStepAuth.classList.remove('hide');
    firstStepAuth.classList.add('show');
});