// window.addEventListener('load', (event) => {
//     console.log('page is fully loaded');
// });


var card = document.querySelector('.card');

card.addEventListener('click', function () {
    card.classList.toggle('is-flipped');
});
