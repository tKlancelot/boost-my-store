/****************************** */
/**** evenement scrolltop  **** */
/****************************** */

let header = document.querySelector('#bms-header');

const scrollFunction = () => {
    if (document.body.scrollTop > 120 || document.documentElement.scrollTop > 80) {
        header.classList.add('navbar-fixed');
        console.log('add navbar-fixed')
    } else {
        header.classList.remove('navbar-fixed');
        console.log('remove navbar-fixed')
    }
}

window.addEventListener('DOMContentLoaded', (event) => {
    window.onscroll = function () {
        scrollFunction();
    };
});

