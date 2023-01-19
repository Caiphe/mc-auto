window.addEventListener('load', loadShow);

function loadShow(){
    setTimeout(() => {
        document.querySelector('.bottom-bar').classList.add('show');
        document.querySelector('.search-form-block').classList.add('slideInUp');
        document.querySelector('.search-form-block').classList.add('show');
        document.querySelector('.banner-image-contaienr').classList.add('scale');
        document.querySelector('.text-content').classList.add('fadeIn');
    }, 400);
}