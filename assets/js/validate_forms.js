document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("form").addEventListener('submit', validarFormulario);
});

function validarFormulario(evento) {
    evento.preventDefault();
    var name = document.getElementById('name').value;
    if (name.length == 0) {
        alert('Dejaste el campo nombre en blanco');
        return;
    }
    var email = document.getElementById('email').value;
    if (email.length == 0) {
        alert('Dejaste el campo Correo electrónico en blanco');
        return;
    }
    var message = document.getElementById('message').value;
    if (message.length == 0) {
        alert('Necesitamos conocer que neceistas, por favor completa el campo de mensaje');
        return;
    }
    alert('Tu mensaje se envío correctamente');
    this.submit();
}