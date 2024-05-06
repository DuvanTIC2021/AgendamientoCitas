// script.js
document.addEventListener('DOMContentLoaded', function() {
    var form = document.querySelector('form');
    form.onsubmit = function(event) {
        // Validar que todos los campos estén llenos
        var location = document.getElementById('location').value;
        var person = document.getElementById('person').value;
        var date = document.getElementById('date').value;
        var time = document.getElementById('time').value;

        if (!location || !person || !date || !time) {
            alert('Por favor, completa todos los campos para agendar la cita.');
            event.preventDefault(); // Prevenir que el formulario se envíe
        }
    };
});
