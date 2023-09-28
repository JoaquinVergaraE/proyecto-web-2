// jQuery
$(document).ready(function() {
    $('a[data-toggle="planifica-instrucciones"]').click(function(e) {
        e.preventDefault(); // Evitar que el enlace redirija
        $('#planifica-instrucciones').toggle(); // Mostrar u ocultar el elemento de contenido
    });
});

// JavaScript puro
document.addEventListener('DOMContentLoaded', function() {
    var enlace = document.querySelector('a[data-toggle="planifica-instrucciones"]');
    var contenido = document.getElementById('planifica-instrucciones');

    if (enlace && contenido) {
        enlace.addEventListener('click', function(e) {
            e.preventDefault(); // Evitar que el enlace redirija
            contenido.style.display = (contenido.style.display === 'none' || contenido.style.display === '') ? 'block' : 'none'; // Mostrar u ocultar el elemento de contenido
        });
    }
});
