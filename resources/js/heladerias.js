//document.addEventListener('DOMContentLoaded', async ()=>{
    //await heladerias();
//});

const  heladerias = async ()=>{
    const ress = await fetch('/heladerias.json');
    const data = await ress.json();
    const container = document.getElementById('wrapperHeladerias');
    data.forEach(heladeria=>{

        let Localidad = heladeria.Localidad
        let Direccion = heladeria.Direccion
        let Telefono = heladeria.Telefono
        let Horarios = heladeria.Horarios
        let Delivery = heladeria.Delivery
        let Foto = heladeria.Foto
        const slide = document.createElement('article');
        slide.classList.add('slide-sucursal', 'p-10','swiper-slide','bg-brand-primary')

        slide.innerHTML = `
                    <div class="flex w-full md:w-xl" data-aos="fade-in" data-aos-delay="50">
                        <div class="w-full md:w-xl">
                            <h3 class="text-white text-4xl font-bold mb-10">${Localidad}</h3>
                            <ul class="flex flex-col p-0 w-full md:w-xl ">
                                <li class="shadow-md shadow-b mt-1 bg-[#553321] font-bold text-white odd:bg-[#E56221] px-5 py-2">Direccion: ${Direccion}</li>
                                <li class="shadow-md shadow-b mt-1 bg-[#553321] font-bold text-white odd:bg-[#E56221] px-5 py-2">Telefono: ${Telefono}</li>
                                <li class="shadow-md shadow-b mt-1 bg-[#553321] font-bold text-white odd:bg-[#E56221] px-5 py-2">Horarios: ${Horarios}</li>
                                <li class="shadow-md shadow-b mt-1 bg-[#553321] font-bold text-white odd:bg-[#E56221] px-5 py-2">Delivery: ${Delivery}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="slide-image shadow-md rounded-xl overflow-hidden">
                    <img
                        class="w-full aspect-[4/3] object-cover object-center"
                        src="${Foto}"
                        alt="Sucursal ${Localidad}">
                    </div>`;

        container.appendChild(slide)
    })
}
