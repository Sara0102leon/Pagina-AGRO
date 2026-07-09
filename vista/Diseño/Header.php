<?php
/**
 * vista/layout/header.php
 * -----------------------------------------------------------------
 * Encabezado global del sitio "Gente lo Nuestro Agro".
 * Incluye: <head> (metadatos, fuentes, Tailwind + configuración, estilos
 * custom), la barra de navegación superior y el menú lateral responsivo.
 *
 * Este archivo se incluye al inicio de cada vista (ej. desde index.php
 * o desde el controlador correspondiente). El contenido propio de cada
 * página va DESPUÉS de este include, y footer.php cierra el documento.
 * -----------------------------------------------------------------
 */

if (!defined('BASE_URL')) {
    define('BASE_URL', '/AgroGLN');
}
?>
<!DOCTYPE html>
<html lang="es" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($tituloPagina) ? htmlspecialchars($tituloPagina) . ' | Gente lo Nuestro Agro' : 'Gente lo Nuestro - Agro' ?></title>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;900&display=swap" rel="stylesheet">
    
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Montserrat', 'sans-serif'],
                    },
                    colors: {
                        base: '#101014',     
                        card: '#1c1c24',  
                        agro: {
                            green: '#6a994e',
                            orange: '#386641',
                            yellow: '#efb810'
                        }
                    },
                    animation: {
                        'float': 'floating 3s ease-in-out infinite',
                        'marquee': 'marquee 20s linear infinite', 
                    },
                    keyframes: {
                        floating: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        },
                        marquee: {
                            '0%': { transform: 'translateX(0%)' },
                            '100%': { transform: 'translateX(-100%)' }
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .animate-float-slow { animation: floating 4s ease-in-out infinite; }
        .animate-float-delayed { animation: floating 3.5s ease-in-out infinite; animation-delay: 1s; }
        
        /* Oculta la barra de desplazamiento */
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }

        /* ANIMACIÓN DE REBOTE PARA LA PUBLICIDAD */
        @keyframes bounceIn {
            0% { opacity: 0; transform: scale(0.85) translateY(15px); }
            55% { opacity: 0.9; transform: scale(1.03) translateY(-4px); }
            75% { transform: scale(0.98) translateY(1px); }
            100% { opacity: 1; transform: scale(1) translateY(0); }
        }
        .animate-bounce-in {
            animation: bounceIn 0.65s cubic-bezier(0.25, 1, 0.5, 1) forwards;
        }
    </style>
</head>
<body class="bg-base text-white font-sans antialiased selection:bg-agro-green selection:text-base transition-colors duration-300">

    <header class="sticky top-0 z-50 bg-base/95 shadow-md backdrop-blur-sm transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            
            <div class="logo">
                <a href="#" class="block">
                    <!-- Se dejó únicamente el logo horizontal apto para fondo oscuro -->
                    <img src="<?= BASE_URL ?>/contenido/LOGO HORIZONTAL.png" alt="Gente lo Nuestro Agro" class="h-10 md:h-12 w-auto object-contain">
                </a>
            </div>
            
            <div class="flex items-center gap-4 md:gap-8">
                <nav class="hidden lg:block">
                    <ul class="flex gap-6 text-sm font-bold uppercase tracking-wider items-center">
                        <li><a href="#quienes-somos" class="hover:text-agro-green transition-colors duration-300">Quiénes Somos</a></li>
                        <li><a href="#revista" class="hover:text-agro-green transition-colors duration-300">Revista</a></li>
                        <li><a href="#articulos" class="hover:text-agro-green transition-colors duration-300">Artículo Central</a></li>
                        <li><a href="#podcast" class="hover:text-agro-green transition-colors duration-300">Podcast</a></li>
                        
                        <!-- MENÚ DESPLEGABLE HORIZONTAL -->
                        <li class="relative group py-2">
                            <a href="#" class="hover:text-agro-green transition-colors duration-300 flex items-center gap-1 cursor-pointer">
                                Marcas
                                <svg class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </a>
                            <!-- Mini menú vertical -->
                            <ul class="absolute right-0 top-full mt-1 w-52 bg-card border border-gray-800 rounded-xl shadow-xl py-3 hidden group-hover:block z-50 animate-fade-in">
                                <li>
                                    <a href="#marcas-aliadas" class="block px-5 py-2 text-xs font-bold uppercase tracking-wider text-gray-300 hover:text-agro-green transition-colors">
                                        Marcas Aliadas
                                    </a>
                                </li>
                                <li>
                                    <a href="#nuestras-marcas" class="block px-5 py-2 text-xs font-bold uppercase tracking-wider text-gray-300 hover:text-agro-green transition-colors">
                                        Nuestras Marcas
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                
                <button id="menu-btn" class="block lg:hidden p-2 text-white hover:text-agro-green transition-colors focus:outline-none" aria-label="Abrir menú">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div class="h-1 w-full bg-gradient-to-r from-agro-green via-agro-yellow to-agro-orange"></div>
    </header>

    <!-- MENÚ LATERAL -->
    <div id="sidebar-menu" class="fixed inset-0 z-[100] translate-x-full transition-transform duration-300 ease-in-out lg:hidden">
        <div id="sidebar-overlay" class="absolute inset-0 bg-black/60 backdrop-blur-sm"></div>
        <nav class="absolute top-0 right-0 w-72 h-full bg-card shadow-2xl p-6 flex flex-col justify-between">
            <div>
                <div class="flex justify-between items-center mb-8 pb-4 border-b border-gray-800">
                    <span class="font-black uppercase tracking-wider text-sm text-agro-green">Navegación</span>
                    <button id="close-btn" class="p-1 text-gray-500 hover:text-red-500 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <ul class="space-y-4 text-md font-bold uppercase tracking-wide">
                    <li><a href="#quienes-somos" class="sidebar-link block py-2 hover:text-agro-green transition-colors">Quiénes Somos</a></li>
                    <li><a href="#revista" class="sidebar-link block py-2 hover:text-agro-green transition-colors">Revista</a></li>
                    <li><a href="#articulos" class="sidebar-link block py-2 hover:text-agro-green transition-colors">Artículo Central</a></li>
                    <li><a href="#podcast" class="sidebar-link block py-2 hover:text-agro-green transition-colors">Podcast</a></li>
                    
                    <li class="pt-2 border-t border-gray-800">
                        <span class="block text-xs font-black text-gray-400 tracking-widest mb-2">Marcas</span>
                        <ul class="pl-4 space-y-2 normal-case tracking-normal text-sm font-medium">
                            <li><a href="#marcas-aliadas" class="sidebar-link block py-1 text-gray-300 hover:text-agro-green">Marcas Aliadas</a></li>
                            <li><a href="#nuestras-marcas" class="sidebar-link block py-1 text-gray-300 hover:text-agro-green">Nuestras Marcas</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="text-xs text-gray-400 text-center border-t border-gray-800 pt-4">
                © 2026 Gente lo Nuestro.
            </div>
        </nav>
    </div>
   