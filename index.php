<?php
// Cargar configuraciones y base de datos
require_once 'config/conexion.php';
require_once 'modelo/Conexion.php';

// Capturar la URL actual para el enrutamiento básico
$request = $_SERVER['REQUEST_URI'];
$path = str_replace(BASE_URL, '', $request);
$path = explode('?', $path)[0]; // Limpiar parámetros de consultas GET si existen

// Enrutador simple
if ($path === '/' || $path === '/inicio' || $path === '') {
    // Definir el título dinámico que va a leer el header
    $tituloPagina = "Gente lo Nuestro - Agro | Portal Oficial";

    // Unir las piezas de la interfaz
    include 'vista/Diseño/Header.php';
    include 'vista/Diseño/Inicio.php';
    include 'vista/Diseño/Footer.php';
} else {
    // Manejo de páginas no encontradas de forma básica
    http_response_code(404);
    echo "<h3>Error 404: La sección del portal agrícola no existe.</h3>";
}