import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';
import AOS from 'aos';
import 'aos/dist/aos.css';

import lightbox from 'lightbox2';
import 'lightbox2/dist/css/lightbox.min.css';



document.addEventListener('DOMContentLoaded', async ()=>{
    //swiperHeader();
    loader()
    fixedNavigation();
    mobileMenu();
    AOS.init();
    swiperSucursales();
    filtarSabores();
    galeriaLightbox();
    modalDeudor()
});




const loader = () =>{
    const loader = document.getElementById('loader');
    if(!sessionStorage.getItem('visito')){
        sessionStorage.setItem('visito', 'true');
        setTimeout(()=>{
            loader.remove();
        }, 1500)
    }else{
        loader.remove();
    }
}

const swiperHeader = () => new Swiper('.swiper-header',{
    loop:true,
    effect: 'fade',


});
const swiperSucursales = () => new Swiper('.swiper-sucursales',{

    loop:true,
      pagination: {
        el: ".swiper-pagination",
      },
    effect: 'fade',
    autoplay: {
        delay: 3000,
    },

});


const fixedNavigation = () =>{
    const navbar = document.querySelector('#navbar');
    const header = document.querySelector('header');
    const body = document.querySelector('body');

    document.addEventListener('scroll',()=>{
        if(header.getBoundingClientRect().bottom < 0 ){
            navbar.classList.add('fixedNav', 'shadow-md', 'bg-brand-primary')
            navbar.classList.remove('bg-transparent')
            body.classList.add('pt-3')
        }else{
            navbar.classList.remove('fixedNav','shadow-md', 'bg-brand-primary')
            navbar.classList.add('bg-transparent')
            body.classList.remove('pt-3')
        }

    })
}


const mobileMenu = () => {
    const btn = document.getElementById('hamburgerButton');
    const closeBtn = document.getElementById('closeIcon');
    const menu = document.getElementById('menu');
    const body = document.querySelector('body');

    // Abrir/cerrar con el botón hamburguesa
    btn.addEventListener('click', () => {
        menu.classList.toggle('show');
        body.classList.toggle('overflow-hidden');
        btn.classList.toggle('hidden');
        closeBtn.classList.toggle('hidden');
    });
    // Abrir/cerrar con el botón cerrar
    closeBtn.addEventListener('click', () => {
        menu.classList.toggle('show');
        body.classList.toggle('overflow-hidden');
        btn.classList.toggle('hidden');
        closeBtn.classList.toggle('hidden');
    });

    // Variables para detectar el gesto
    let touchStartX = 0;
    let touchEndX = 0;

    // Detectar inicio del toque
    menu.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
    });

    // Detectar fin del toque
    document.body.addEventListener('touchend', (e) => {
        touchEndX = e.changedTouches[0].screenX;
        handleGesture();
    });

    // Función para manejar el gesto
    function handleGesture() {
        // Si el usuario desliza hacia la izquierda (start > end)
        if (touchStartX - touchEndX > 50) {
            menu.classList.remove('show');
            body.classList.remove('overflow-hidden');

            btn.classList.toggle('hidden');
            closeBtn.classList.toggle('hidden');
        }
    }
};


const filtarSabores = () => {
    const buttons = document.querySelectorAll('[data-filter]');
    const categorias = document.querySelectorAll('[data-categoria]');

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            const filtro = button.getAttribute('data-filter');

            // quitar borde de todos los botones
            buttons.forEach(btn => btn.classList.remove('border-brand-primary'));
            // agregar borde al botón activo
            button.classList.add('border-brand-primary');

            // filtrar categorías
            categorias.forEach(categoria => {
                const categoriaNombre = categoria.getAttribute('data-categoria');

                if (filtro === 'todo' || filtro === categoriaNombre) {
                    categoria.style.display = 'flex'; // mostrar
                } else {
                    categoria.style.display = 'none'; // ocultar
                }
            });
        });
    });
};


const galeriaLightbox = () => {
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true,

      })
}
