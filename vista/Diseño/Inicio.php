  <!-- HERO CARRUSEL -->
    <section class="relative w-full h-[25vh] sm:h-[55vh] lg:h-[65vh] overflow-hidden group">
        <div id="carrusel-track" class="flex w-full h-full transition-transform duration-700 ease-in-out">
            <div class="relative min-w-full h-full flex items-center justify-center text-center">
                 <img src="<?= BASE_URL ?>/contenido/BANNER AGRO.jpg" alt="Portada Revista" class="w-full h-full object-cover">
                  <div class="absolute inset-0 bg-base/40 z-10"></div>
            </div>
           <div class="relative min-w-full h-full flex items-center justify-center text-center">
            <video autoplay loop muted playsinline class="absolute top-1/2 left-1/2 min-w-full min-h-full -translate-x-1/2 -translate-y-1/2 object-cover z-0">
                <source src="<?= BASE_URL ?>/contenido/2.mp4" type="video/mp4">
            </video>
             <div class="absolute inset-0 bg-base/40 z-10"></div>
            <div class="relative z-20 max-w-4xl px-5">
                <h1 class="text-2xl md:text-6xl font-black text-white uppercase mb-2 md:mb-4 tracking-tight drop-shadow-xl">Raíces que Alimentan</h1>
                <p class="text-xs md:text-xl text-gray-200">Historias de esfuerzo y dedicación desde el corazón de Lara.</p>
            </div>
        </div>

            <div class="relative min-w-full h-full flex items-center justify-center text-center">
                <video autoplay loop muted playsinline class="absolute top-1/2 left-1/2 min-w-full min-h-full -translate-x-1/2 -translate-y-1/2 object-cover z-0">
                    <source src="<?= BASE_URL ?>/contenido/3.mp4" type="video/mp4">
                </video>
                <div class="absolute inset-0 bg-base/40 z-10"></div>
                <div class="relative z-20 max-w-4xl px-5">
                    <h1 class="text-2xl md:text-6xl font-black text-white uppercase mb-2 md:mb-4 tracking-tight drop-shadow-xl">Maiz y Caña, Orgullo de Lara</h1>
                    <p class="text-xs md:text-xl text-gray-200">Productos de la tierra que representan el espíritu de Lara.</p>
                </div>
            </div>
        </div>

        <button onclick="moverCarrusel(-1)" class="absolute left-4 top-1/2 -translate-y-1/2 bg-black/40 text-white w-8 h-8 md:w-12 md:h-12 flex items-center justify-center rounded-full hover:bg-agro-green transition z-30 opacity-100 lg:opacity-0 lg:group-hover:opacity-100">
            <svg class="w-4 h-4 md:w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
        </button>
        <button onclick="moverCarrusel(1)" class="absolute right-4 top-1/2 -translate-y-1/2 bg-black/40 text-white w-8 h-8 md:w-12 md:h-12 flex items-center justify-center rounded-full hover:bg-agro-green transition z-30 opacity-100 lg:opacity-0 lg:group-hover:opacity-100">
            <svg class="w-4 h-4 md:w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
        </button>
    </section>

    <!-- SECCIÓN PRINCIPAL -->
    <main class="max-w-7xl mx-auto px-6 py-12 md:py-24 grid grid-cols-1 lg:grid-cols-12 gap-12">
        
        <div class="lg:col-span-8 space-y-24">
            
           
         <!-- QUIÉNES SOMOS INTERACTIVO -->
<section id="quienes-somos" class="scroll-mt-28">

  <div class="text-center mb-12">
    <h2 class="text-4xl font-black uppercase border-b-4 border-agro-green inline-block pb-2 tracking-tight text-white">
        ¿Quiénes <span class="text-agro-green">Somos?</span>
    </h2>
    <p class="text-gray-400 text-base mt-5 max-w-2xl mx-auto">
        Descubre nuestra esencia, trayectoria e impacto en el sector agropecuario a través de nuestras líneas de acción pilares.
    </p>
</div>

<!-- Grid de 2 columnas (2 arriba, 2 abajo) -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12 max-w-5xl mx-auto px-4">
    
    <!-- TARJETA 1 -->
    <div class="flex justify-center">
        <div class="group [perspective:1000px] w-full max-w-[380px] h-[380px] cursor-pointer" onclick="this.querySelector('.card-inner').classList.toggle('[transform:rotateY(180deg)]')">
            <div class="card-inner relative w-full h-full duration-700 [transform-style:preserve-3d] lg:group-hover:[transform:rotateY(180deg)]">
                <div class="absolute inset-0 w-full h-full rounded-3xl overflow-hidden shadow-2xl border border-gray-800 [backface-visibility:hidden]" style="background-color: #171717 !important;">
                    <img src="<?= BASE_URL ?>/contenido/CARRUSEL-AGRO-2_02.jpg" alt="Identidad" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/40 to-transparent p-8 flex flex-col justify-end">
                        <span class="text-sm font-black uppercase tracking-widest text-agro-green mb-2 drop-shadow-lg">01. Trayectoria</span>
                        <h3 class="text-3xl font-bold text-white leading-tight drop-shadow-lg">Nuestra Identidad</h3>
                    </div>
                </div>
                <div class="absolute inset-0 w-full h-full rounded-3xl border-2 border-agro-green p-6 flex flex-col items-center justify-center text-center shadow-2xl [backface-visibility:hidden] [transform:rotateY(180deg)]" style="background-color: #171717 !important;">
                    <span class="text-sm font-black uppercase tracking-widest text-agro-green mb-4">Nuestra Identidad</span>
                    <p class="text-sm md:text-base font-semibold leading-relaxed" style="color: #ffffff !important;">
                       Descubre Gente Lo Nuestro Agro-Industrial, el ecosistema mediático que conecta el campo con la gran Industria.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- TARJETA 2 -->
    <div class="flex justify-center">
        <div class="group [perspective:1000px] w-full max-w-[380px] h-[380px] cursor-pointer" onclick="this.querySelector('.card-inner').classList.toggle('[transform:rotateY(180deg)]')">
            <div class="card-inner relative w-full h-full duration-700 [transform-style:preserve-3d] lg:group-hover:[transform:rotateY(180deg)]">
                <div class="absolute inset-0 w-full h-full rounded-3xl overflow-hidden shadow-2xl border border-gray-800 [backface-visibility:hidden]" style="background-color: #171717 !important;">
                    <img src="<?= BASE_URL ?>/contenido/CARRUSEL-AGRO-2_03.jpg" alt="Innovación" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/40 to-transparent p-8 flex flex-col justify-end">
                        <span class="text-sm font-black uppercase tracking-widest text-agro-green mb-2 drop-shadow-lg">02. Tecnología</span>
                        <h3 class="text-3xl font-bold text-white leading-tight drop-shadow-lg">Innovación</h3>
                    </div>
                </div>
                <div class="absolute inset-0 w-full h-full rounded-3xl border-2 border-agro-green p-6 flex flex-col items-center justify-center text-center shadow-2xl [backface-visibility:hidden] [transform:rotateY(180deg)]" style="background-color: #171717 !important;">
                    <span class="text-sm font-black uppercase tracking-widest text-agro-green mb-4">Innovación</span>
                    <p class="text-sm md:text-base font-semibold leading-relaxed" style="color: #ffffff !important;">
                        En cada edición realzamos las historias de éxito, la innovación tecnológica y el esfuerzo de quienes transforman la materia prima en progreso para el país.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- TARJETA 3 -->
    <div class="flex justify-center">
        <div class="group [perspective:1000px] w-full max-w-[380px] h-[380px] cursor-pointer" onclick="this.querySelector('.card-inner').classList.toggle('[transform:rotateY(180deg)]')">
            <div class="card-inner relative w-full h-full duration-700 [transform-style:preserve-3d] lg:group-hover:[transform:rotateY(180deg)]">
                <div class="absolute inset-0 w-full h-full rounded-3xl overflow-hidden shadow-2xl border border-gray-800 [backface-visibility:hidden]" style="background-color: #171717 !important;">
                    <img src="<?= BASE_URL ?>/contenido/CARRUSEL-AGRO-2_04.jpg" alt="Compromiso" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/40 to-transparent p-8 flex flex-col justify-end">
                        <span class="text-sm font-black uppercase tracking-widest text-agro-green mb-2 drop-shadow-lg">03. Valores</span>
                        <h3 class="text-3xl font-bold text-white leading-tight drop-shadow-lg">Compromiso</h3>
                    </div>
                </div>
                <div class="absolute inset-0 w-full h-full rounded-3xl border-2 border-agro-green p-6 flex flex-col items-center justify-center text-center shadow-2xl [backface-visibility:hidden] [transform:rotateY(180deg)]" style="background-color: #171717 !important;">
                    <span class="text-sm font-black uppercase tracking-widest text-agro-green mb-4">Compromiso</span>
                    <p class="text-sm md:text-base font-semibold leading-relaxed" style="color: #ffffff !important;">
                        Ser parte de Gente Lo Nuestro Agro-Industrial es asegurar que tu negocio sea visto por tomadores de decisiones, inversionistas y una audiencia masiva calificada a nivel nacional.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- TARJETA 4 ( -->
    <div class="flex justify-center">
        <div class="group [perspective:1000px] w-full max-w-[380px] h-[380px] cursor-pointer" onclick="this.querySelector('.card-inner').classList.toggle('[transform:rotateY(180deg)]')">
            <div class="card-inner relative w-full h-full duration-700 [transform-style:preserve-3d] lg:group-hover:[transform:rotateY(180deg)]">
                <div class="absolute inset-0 w-full h-full rounded-3xl overflow-hidden shadow-2xl border border-gray-800 [backface-visibility:hidden]" style="background-color: #171717 !important;">
                    <img src="<?= BASE_URL ?>/contenido/CARRUSEL-AGRO-2_06.jpg" alt="Visión" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/40 to-transparent p-8 flex flex-col justify-end">
                        <span class="text-sm font-black uppercase tracking-widest text-agro-green mb-2 drop-shadow-lg">04. Sinergia</span>
                        <h3 class="text-3xl font-bold text-white leading-tight drop-shadow-lg">Alianzas</h3>
                    </div>
                </div>
               <div class="absolute inset-0 w-full h-full rounded-3xl border-2 border-agro-green p-8 flex flex-col items-center justify-center text-center shadow-2xl [backface-visibility:hidden] [transform:rotateY(180deg)] gap-6" style="background-color: #171717 !important;">
    
  
                <div>
                    <span class="text-sm font-black uppercase tracking-widest text-agro-green block mb-3">Alianzas</span>
                    <p class="text-sm md:text-base font-semibold leading-relaxed" style="color: #ffffff !important;">
                        Si eres productor, empresario o proveedor de soluciones para el agro y la industria, este es tu espacio. Comparte tu historia, impulsa tu marca y conecta con nuevos mercados.
                    </p>
                </div>
                
                <!-- Botón sin mt-auto, el gap-6 del padre controlará la separación -->
                <button onclick="event.stopPropagation(); window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' });" class="bg-agro-green text-white font-bold uppercase text-xs tracking-wider px-6 py-2.5 rounded-full hover:bg-white hover:text-black transition-colors duration-300 shadow-md flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-2.896-1.596-5.48-4.18-7.076-7.076l1.293-.97c.362-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                    </svg>
                    Contáctanos
                </button>
            </div>
            </div>
        </div>
    </div>

</div>
</section>
            
            <!-- REVISTA -->
            <section id="revista" class="scroll-mt-28">
                <div class="flex justify-between items-end mb-10 border-b-4 border-agro-orange pb-2">
                    <h2 class="text-3xl font-black uppercase tracking-tight text-white">
                        Nuestra <span class="text-agro-green">Revista</span>
                    </h2>
                </div>
                
                <div class="bg-card rounded-3xl p-6 md:p-12 shadow-2xl border border-gray-800 flex flex-col md:flex-row items-center gap-10">
                    <div class="w-full md:w-1/2 flex justify-center">
                        <div onclick="abrirRevista()" class="relative group cursor-pointer w-full max-w-sm rounded-xl overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.3)] transition-transform duration-500 hover:scale-105">
                            <img src="<?= BASE_URL ?>/contenido/PORTADA.png" alt="Portada Revista" class="w-full h-auto object-cover">
                            <div class="absolute inset-0 bg-black/60 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <svg class="w-12 h-12 text-white mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                <span class="text-white font-bold uppercase tracking-wider text-sm bg-agro-green px-4 py-2 rounded-full shadow-lg">Leer Revista</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="w-full md:w-1/2 text-center md:text-left space-y-6">
                        <span class="text-agro-green font-black uppercase tracking-widest text-sm">Edición Especial N° 1</span>
                        <h3 class="text-3xl md:text-4xl font-bold text-white tracking-tight">Especial de Producción Agropecuaria 2026</h3>
                        <p class="text-gray-400 leading-relaxed text-md md:text-lg">
                            Descubre los avances tecnológicos, interviews exclusivas y todo sobre el sector agrícola, ganadero y pecuario en esta edición interactiva.
                        </p>
                        <div class="pt-2">
                            <a href="../contenido/REVISTA GLN 125.pdf" download="Gente_Lo_Nuestro_Agro_Edicion_1.pdf" class="bg-agro-green hover:bg-green-600 text-white font-bold uppercase text-sm tracking-wider px-8 py-4 rounded-xl transition-all shadow-lg flex items-center gap-3 mx-auto md:mx-0 w-fit">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                </svg>
                                Descargar PDF
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- MODAL REVISTA -->
            <div id="modalFlipbook" class="fixed inset-0 z-[100] hidden bg-black/95 backdrop-blur-sm flex items-center justify-center transition-all duration-300 opacity-0">
                <button onclick="cerrarRevista()" class="absolute top-4 right-4 text-white hover:text-agro-green transition-colors z-50 p-2">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
                <div class="w-full h-full md:w-[90vw] md:h-[95vh] flex items-center justify-center p-2 md:p-8">
                    <iframe id="iframeRevista" src="" class="w-full h-full rounded-xl shadow-2xl bg-transparent" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>

           <div id="modalInfo" class="fixed inset-0 z-[100] hidden bg-black/95 backdrop-blur-sm flex items-center justify-center transition-all duration-300 opacity-0">
    <button onclick="cerrarInfo()" class="absolute top-4 right-4 text-white hover:text-agro-green transition-colors z-50 p-2">
        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
    </button>

    <!-- Contenedor del Slider -->
    <div class="relative w-full max-w-6xl h-[40vh] sm:h-[85vh] flex items-center justify-center p-4">
        
        <!-- Contenedor de la Imagen (Mantiene la proporción 1350x1080 sin recortar) -->
        <div class="relative w-full h-full rounded-xl overflow-hidden shadow-2xl flex items-center justify-center">
            <img id="slideInfo" src="" class="max-w-full max-h-full object-contain transition-opacity duration-300" alt="Información detallada">
        </div>

        <!-- Botón Anterior -->
        <button onclick="cambiarSlideInfo(-1)" class="absolute left-2 sm:left-6 text-white bg-black/60 hover:bg-agro-green p-2 sm:p-4 rounded-full transition-colors z-50 shadow-lg backdrop-blur-sm">
            <svg class="w-6 h-6 sm:w-8 sm:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path></svg>
        </button>

        <!-- Botón Siguiente -->
        <button onclick="cambiarSlideInfo(1)" class="absolute right-2 sm:right-6 text-white bg-black/60 hover:bg-agro-green p-2 sm:p-4 rounded-full transition-colors z-50 shadow-lg backdrop-blur-sm">
            <svg class="w-6 h-6 sm:w-8 sm:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path></svg>
        </button>

        <!-- Indicador de página -->
        <div class="absolute bottom-[-1.5rem] sm:bottom-6 left-1/2 -translate-x-1/2 bg-black/70 px-5 py-1.5 rounded-full text-white text-sm font-bold tracking-widest shadow-lg backdrop-blur-sm">
            <span id="contadorInfo">1</span> / <span id="totalInfo">3</span>
        </div>
    </div>
</div>

            <!-- ARTÍCULOS -->
            <section id="articulos" class="scroll-mt-28">
                <div class="flex justify-between items-end mb-10 border-b-4 border-agro-yellow pb-2">
                    <h2 class="text-3xl font-black uppercase tracking-tight text-white">
                        Últimos <span class="text-agro-green">Artículos</span>
                    </h2>
                    <span class="hidden sm:inline text-xs font-bold uppercase tracking-wider text-agro-green">Historias del Campo</span>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="md:col-span-2 group overflow-hidden bg-card rounded-2xl shadow-lg border border-transparent flex flex-col justify-between transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl">
                        <div class="relative overflow-hidden h-60 sm:h-72">
                            <img src="<?= BASE_URL ?>/contenido/ARTICULO4.jpg" alt="Riego Inteligente" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                            <span class="absolute top-4 left-4 z-10 bg-agro-green text-white text-xs font-black uppercase px-3 py-1.5 rounded-lg shadow-md">Reportaje Especial</span>
                        </div>
                        <div class="p-6 md:p-8 flex-1 flex flex-col justify-between">
                            <div>
                                <h3 class="text-xl md:text-2xl font-black mb-4 leading-tight group-hover:text-agro-green transition-colors duration-300 text-white">Tecnologías de Riego Inteligente implementadas en Quíbor</h3>
                                <p class="text-gray-400 text-sm leading-relaxed mb-6">Analizamos cómo los productores de hortalizas están optimizando el uso de los acuíferos subterráneos mediante software avanzado y sistemas automatizados de goteo.</p>
                            </div>
                            <div class="flex items-center justify-between pt-4 border-t border-gray-800">
                                <span class="text-xs text-gray-400 font-medium">Por: Redacción Agro</span>
                                <a href="#" class="text-agro-green font-bold text-xs uppercase tracking-wider flex items-center gap-1 group-hover:gap-3 transition-all">Leer Artículo ➔</a>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-1 gap-6">
                        <div class="group bg-card rounded-2xl shadow-md border border-transparent transition-all duration-300 hover:scale-[1.02] hover:shadow-lg flex flex-col h-full overflow-hidden">
                            <div class="h-32 w-full overflow-hidden relative">
                                <img src="<?= BASE_URL ?>/contenido/ARTICULO2.jpg" alt="Ganado Carora" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                            </div>
                            <div class="p-5 flex flex-col justify-between flex-1">
                                <div>
                                    <span class="text-[10px] font-black uppercase text-agro-orange tracking-widest block mb-1">Ganadería</span>
                                    <h4 class="font-bold text-md leading-snug group-hover:text-agro-green transition-colors text-white">Mejoramiento genético del ganado Carora</h4>
                                </div>
                                <a href="#" class="text-xs font-bold text-agro-green mt-4 inline-block">Ver notas →</a>
                            </div>
                        </div>
                        <div class="group bg-card rounded-2xl shadow-md border border-transparent transition-all duration-300 hover:scale-[1.02] hover:shadow-lg flex flex-col h-full overflow-hidden">
                            <div class="h-32 w-full overflow-hidden relative">
                                <img src="<?= BASE_URL ?>/contenido/ARTICULO3.jpg" alt="Abonos orgánicos" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                            </div>
                            <div class="p-5 flex flex-col justify-between flex-1">
                                <div>
                                    <span class="text-[10px] font-black uppercase text-agro-yellow tracking-widest block mb-1">Sostenibilidad</span>
                                    <h4 class="font-bold text-md leading-snug group-hover:text-agro-green transition-colors text-white">Abonos orgánicos a base de pulpa de café</h4>
                                </div>
                                <a href="#" class="text-xs font-bold text-agro-green mt-4 inline-block">Ver notas →</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- PODCASTS -->
            <section id="podcast" class="scroll-mt-28 max-w-7xl mx-auto py-12 px-4">
                <div class="text-center mb-10">
                    <h2 class="text-4xl font-black text-white uppercase tracking-tight">NUESTROS <span class="text-agro-green">PODCASTS</span></h2>
                    <div class="w-20 h-1 bg-orange-500 mx-auto mt-4"></div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <div class="flex flex-col">
                        <div class="aspect-video w-full rounded-xl overflow-hidden shadow-2xl bg-black">
                            <iframe 
                                class="w-full h-full"
                                src="https://www.youtube.com/embed/h4HUD2nptno" 
                                title="GENTE LO NUESTRO: III EXPO-CONGRESO" 
                                allowfullscreen>
                            </iframe>
                        </div>
                        <h3 class="text-2xl font-bold text-white mt-4">Podcast #35</h3>
                        <p class="text-gray-400">May 7, 2026</p>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="space-y-2">
                            <img src="<?= BASE_URL ?>/contenido/ARTICULO4.jpg" class="w-full h-32 object-cover rounded-lg border-2 border-transparent hover:border-yellow-500 transition">
                            <p class="text-white font-bold text-sm">PROXIMAMENTE</p>
                            <p class="text-gray-500 text-xs">2026</p>
                        </div>
                        <div class="space-y-2">
                            <img src="<?= BASE_URL ?>/contenido/ARTICULO3.jpg" class="w-full h-32 object-cover rounded-lg border-2 border-transparent hover:border-yellow-500 transition">
                            <p class="text-white font-bold text-sm">PROXIMAMENTE</p>
                            <p class="text-gray-500 text-xs">2026</p>
                        </div>
                        <div class="space-y-2">
                            <img src="<?= BASE_URL ?>/contenido/ARTICULO2.jpg" class="w-full h-32 object-cover rounded-lg border-2 border-transparent hover:border-yellow-500 transition">
                            <p class="text-white font-bold text-sm">PROXIMAMENTE</p>
                            <p class="text-gray-500 text-xs">2026</p>
                        </div>
                        <div class="space-y-2">
                            <img src="<?= BASE_URL ?>/contenido/ARTICULO1.jpg" class="w-full h-32 object-cover rounded-lg border-2 border-transparent hover:border-yellow-500 transition">
                            <p class="text-white font-bold text-sm">PROXIMAMENTE</p>
                            <p class="text-gray-500 text-xs">2026</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- PUBLICIDAD LATERAL -->
        <aside class="lg:col-span-4 space-y-8">
            <div class="lg:sticky lg:top-28 space-y-6">
                <div class="w-full h-[450px] sm:h-[600px] rounded-2xl shadow-xl bg-slate-950 border border-gray-900 relative overflow-hidden group">
                    <div class="ad-slide absolute inset-0 opacity-0 transition-opacity duration-500 flex flex-col justify-between p-7 z-0 pointer-events-none">
                        <a href="https://www.fao.org/dairy-production-products/dairy/cattle/es" target="_blank" class="absolute inset-0 z-10"></a>
                        <video loop muted playsinline class="absolute inset-0 w-full h-full object-cover opacity-40 group-hover:scale-105 transition-transform duration-1000">
                            <source src="<?= BASE_URL ?>/contenido/4.mp4" type="video/mp4">
                        </video>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-black/20 z-0"></div>
                        <div class="relative z-20 flex justify-between items-start">
                            <span class="bg-agro-green text-black font-black text-[9px] px-2.5 py-1 rounded tracking-widest uppercase shadow-md">Destacado</span>
                        </div>
                        <div class="bounce-element relative z-20 text-white space-y-3 opacity-0">
                            <h3 class="text-3xl font-black uppercase tracking-tight leading-none text-white">Vaquitas</h3>
                            <p class="text-sm text-gray-300 leading-snug">Muchas vacas.</p>
                            <span class="inline-flex text-xs font-bold text-agro-green uppercase tracking-wider border-b-2 border-agro-green pb-0.5">Saber más ➔</span>
                        </div>
                    </div>

                    <div class="ad-slide absolute inset-0 opacity-0 transition-opacity duration-500 flex flex-col justify-between p-7 z-0 pointer-events-none">
                        <a href="https://concepto.de/mar/" target="_blank" class="absolute inset-0 z-10"></a>
                        <img src="<?= BASE_URL ?>/contenido/4.jpg" alt="El oceano" class="absolute inset-0 w-full h-full object-cover opacity-40 group-hover:scale-105 transition-transform duration-1000">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-black/20 z-0"></div>
                        <div class="relative z-20 flex justify-between items-start">
                            <span class="bg-agro-orange text-black font-black text-[9px] px-2.5 py-1 rounded tracking-widest uppercase shadow-md">Orgullo</span>
                        </div>
                        <div class="bounce-element relative z-20 text-white space-y-3 opacity-0">
                            <h3 class="text-3xl font-black uppercase tracking-tight leading-none text-white">El Oceano</h3>
                            <p class="text-sm text-gray-300 leading-snug">Da miedo</p>
                            <span class="inline-flex text-xs font-bold text-agro-orange uppercase tracking-wider border-b-2 border-agro-orange pb-0.5">Saber más ➔</span>
                        </div>
                    </div>

                    <div class="ad-slide absolute inset-0 opacity-0 transition-opacity duration-500 flex flex-col justify-between p-7 z-0 pointer-events-none">
                        <a href="https://ovejitas.shoperly.app/" target="_blank" class="absolute inset-0 z-10"></a>
                        <img src="<?= BASE_URL ?>/contenido/PUBLICIDAD AGRO.jpg" alt="Ovejitas" class="absolute inset-0 w-full h-full object-cover opacity-40 group-hover:scale-105 transition-transform duration-1000">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-black/20 z-0"></div>
                        <div class="relative z-20 flex justify-between items-start">
                            <span class="bg-agro-green text-black font-black text-[9px] px-2.5 py-1 rounded tracking-widest uppercase shadow-md">Destacado</span>
                        </div>
                        <div class="bounce-element relative z-20 text-white space-y-3 opacity-0">
                            <h3 class="text-3xl font-black uppercase tracking-tight leading-none text-white">Ovejitas</h3>
                            <p class="text-sm text-gray-300 leading-snug">OVEJITAS DE GRANJAS MUY RURALES.</p>
                            <span class="inline-flex text-xs font-bold text-agro-green uppercase tracking-wider border-b-2 border-agro-green pb-0.5">Saber más ➔</span>
                        </div>
                    </div>

                    <div class="absolute bottom-5 left-0 w-full z-30 flex justify-center px-6 gap-2">
                        <div class="ad-progress-container flex-1 h-1 bg-white/20 rounded-full overflow-hidden cursor-pointer relative" onclick="cambiarAnuncioManualmente(0)">
                            <div class="ad-progress-bar h-full w-0 bg-agro-green rounded-full"></div>
                        </div>
                        <div class="ad-progress-container flex-1 h-1 bg-white/20 rounded-full overflow-hidden cursor-pointer relative" onclick="cambiarAnuncioManualmente(1)">
                            <div class="ad-progress-bar h-full w-0 bg-agro-green rounded-full"></div>
                        </div>
                        <div class="ad-progress-container flex-1 h-1 bg-white/20 rounded-full overflow-hidden cursor-pointer relative" onclick="cambiarAnuncioManualmente(2)">
                            <div class="ad-progress-bar h-full w-0 bg-agro-green rounded-full"></div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
    </main> 

    <!-- MARCAS ALIADAS -->
    <section id="marcas-aliadas" class="scroll-mt-28 w-full max-w-7xl mx-auto px-6 py-16 border-t border-gray-800">
        <div class="flex justify-between items-end mb-8">
            <h2 class="text-3xl font-black uppercase tracking-tight text-white">Marcas <span class="text-agro-green">Aliadas</span></h2>
        </div>
        
        <div class="overflow-hidden w-full relative py-4 flex gap-6 select-none">
            <div class="flex gap-6 shrink-0 animate-marquee">
                <div class="w-[20px] h-[280px] shrink-0 rounded-2xl overflow-hidden shadow-lg border border-gray-800"><img src="<?= BASE_URL ?>/contenido/marcas aliadas.png" alt="Marca" class="w-full h-full object-cover"></div>
                <div class="w-[280px] h-[280px] shrink-0 rounded-2xl overflow-hidden shadow-lg border border-gray-800"><img src="<?= BASE_URL ?>/contenido/marcas aliadas.png" alt="Marca" class="w-full h-full object-cover"></div>
                <div class="w-[280px] h-[280px] shrink-0 rounded-2xl overflow-hidden shadow-lg border border-gray-800"><img src="<?= BASE_URL ?>/contenido/marcas aliadas.png" alt="Marca" class="w-full h-full object-cover"></div>
                <div class="w-[280px] h-[280px] shrink-0 rounded-2xl overflow-hidden shadow-lg border border-gray-800"><img src="<?= BASE_URL ?>/contenido/marcas aliadas.png" alt="Marca" class="w-full h-full object-cover"></div>
                <div class="w-[280px] h-[280px] shrink-0 rounded-2xl overflow-hidden shadow-lg border border-gray-800"><img src="<?= BASE_URL ?>/contenido/marcas aliadas.png" alt="Marca" class="w-full h-full object-cover"></div>
                <div class="w-[280px] h-[280px] shrink-0 rounded-2xl overflow-hidden shadow-lg border border-gray-800"><img src="<?= BASE_URL ?>/contenido/marcas aliadas.png" alt="Marca" class="w-full h-full object-cover"></div>
            </div>
            
            <div class="flex gap-6 shrink-0 animate-marquee" aria-hidden="true">
                <div class="w-[280px] h-[280px] shrink-0 rounded-2xl overflow-hidden shadow-lg border border-gray-800"><img src="<?= BASE_URL ?>/contenido/marcas aliadas.png" alt="Marca" class="w-full h-full object-cover"></div>
                <div class="w-[280px] h-[280px] shrink-0 rounded-2xl overflow-hidden shadow-lg border border-gray-800"><img src="<?= BASE_URL ?>/contenido/marcas aliadas.png" alt="Marca" class="w-full h-full object-cover"></div>
            </div>
        </div>
    </section>

 <!-- NUESTRAS MARCAS -->
<section id="nuestras-marcas" class="scroll-mt-28 w-full max-w-7xl mx-auto px-6 py-16 border-t border-gray-800">
    <div class="flex justify-between items-end mb-8">
        <h2 class="text-3xl font-black uppercase tracking-tight text-white">Nuestras <span class="text-agro-green">Marcas</span></h2>
    </div>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
        <!-- PREMIOS -->
        <div class="bg-[#15151e] rounded-3xl overflow-hidden flex flex-col shadow-xl border border-gray-800 hover:-translate-y-2 transition-transform duration-300">
            <img src="<?= BASE_URL ?>/contenido/MARCA1.jpg" alt="Premios" class="w-full h-48 object-cover">
            <div class="p-6 flex flex-col flex-1 text-center items-center">
                <!-- Contenedor del logo centrado -->
                <div class="h-11 flex items-center justify-center mb-3 mx-auto">
                    <img src="<?= BASE_URL ?>/contenido/PREMIOS.png" alt="Premios" class="h-full w-auto object-contain">
                </div>
                <p class="text-sm text-gray-400 mb-6">Reconociendo el talento y la excelencia de nuestra gente.</p>
                <a href="https://premios.gentelonuestro.net/" target="_blank" class="mt-auto text-agro-green font-bold uppercase text-xs tracking-wider hover:text-white transition-colors">VISITAR SITIO →</a>
            </div>
        </div>

        <!--Aprendiendo con Isabella -->
        <div class="bg-[#15151e] rounded-3xl overflow-hidden flex flex-col shadow-xl border border-gray-800 hover:-translate-y-2 transition-transform duration-300">
            <img src="<?= BASE_URL ?>/contenido/MARCA3.jpg" alt="Isabella" class="w-full h-48 object-cover">
            <div class="p-6 flex flex-col flex-1 text-center items-center">
                <!-- Contenedor del logo centrado -->
                <div class="h-11 flex items-center justify-center mb-3 mx-auto">
                    <img src="<?= BASE_URL ?>/contenido/LOGO ISABELLA BLANCO.png" alt="Aprendiendo con Isabella" class="h-full w-auto object-contain">
                </div>
                <p class="text-sm text-gray-400 mb-6">Contenido educativo y divertido para los más pequeños.</p>
                <a href="https://aprendiendoconisabella.gentelonuestro.net/" target="_blank" class="mt-auto text-agro-green font-bold uppercase text-xs tracking-wider hover:text-white transition-colors">VISITAR SITIO →</a>
            </div>
        </div>

        <!--Darte lo Nuestro -->
        <div class="bg-[#15151e] rounded-3xl overflow-hidden flex flex-col shadow-xl border border-gray-800 hover:-translate-y-2 transition-transform duration-300">
            <img src="<?= BASE_URL ?>/contenido/MARCA4.jpg" alt="Darte lo Nuestro" class="w-full h-48 object-cover">
            <div class="p-6 flex flex-col flex-1 text-center items-center">
                <!-- Contenedor del logo centrado -->
                <div class="h-11 flex items-center justify-center mb-3 mx-auto">
                    <img src="<?= BASE_URL ?>/contenido/DAR+.png" alt="Darte lo Nuestro" class="h-full w-auto object-contain">
                </div>
                <p class="text-sm text-gray-400 mb-6">Descubre todo lo que tenemos para ofrecer.</p>
                <a href="https://www.dartelonuestro.com/" target="_blank" class="mt-auto text-agro-green font-bold uppercase text-xs tracking-wider hover:text-white transition-colors">VISITAR SITIO →</a>
            </div>
        </div>

        <!-- Revista Gente Lo Nuestro -->
        <div class="bg-[#15151e] rounded-3xl overflow-hidden flex flex-col shadow-xl border border-gray-800 hover:-translate-y-2 transition-transform duration-300">
            <img src="<?= BASE_URL ?>/contenido/MARCA2.jpg" alt="Revista" class="w-full h-48 object-cover">
            <div class="p-6 flex flex-col flex-1 text-center items-center">
                <!-- Contenedor del logo centrado -->
                <div class="h-11 flex items-center justify-center mb-3 mx-auto">
                    <img src="<?= BASE_URL ?>/contenido/GLN LOGO.png" alt="Revista Gente Lo Nuestro" class="h-full w-auto object-contain">
                </div>
                <p class="text-sm text-gray-400 mb-6">Edición especial sobre la cultura y tradiciones</p>
                <a href="https://revista.gentelonuestro.net/" target="_blank" class="mt-auto text-agro-green font-bold uppercase text-xs tracking-wider hover:text-white transition-colors">VISITAR SITIO →</a>
            </div>
        </div>
    </div>
</section>