// Obtener el valor del atributo "label" de la etiqueta <main>
var mainLabel = document.querySelector('main').getAttribute('label');

// Obtener todos los elementos <a> dentro del menú
var links = document.querySelectorAll('#listadoMenu a');

// Iterar sobre cada enlace y comparar el valor de "label" con el valor de la etiqueta <main>
links.forEach(function(link) {
    var linkLabel = link.getAttribute('label');
    if (linkLabel === mainLabel) {
        // Si los valores coinciden, hacer algo, por ejemplo, agregar una clase para resaltarlo
        link.classList.add('text-success');
        link.classList.add('fw-semibold');
    }
});

/*
        var currentUrl = window.location.href;
        var links = document.querySelectorAll('#listadoMenu li a');
        links.forEach(function (link) {
            if (link.href === currentUrl) {
                link.classList.add('text-success');
                link.classList.add('fw-bold');
            }
        });
*/