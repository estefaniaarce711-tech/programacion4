function validarFormulario() {
    const cedula = document.getElementById("cedula").value;
    const email = document.getElementById("email").value;

    // Validar que la cédula sea numérica
    if (!/^[0-9]+$/.test(cedula)) {
        alert("La cédula debe contener solo números.");
        return false;
    }

    // Validar formato de email (JS básico)
    const regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!regexEmail.test(email)) {
        alert("El correo electrónico no tiene un formato válido.");
        return false;
    }

    return true;
}
