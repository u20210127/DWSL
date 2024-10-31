document.getElementById('validationForm').addEventListener('submit', function(event) {
    event.preventDefault();

    // Validación del nombre
    const nombre = document.getElementById('nombre').value;
    if (!/^[MOPS]/i.test(nombre)) {
        alert("El nombre debe iniciar con M, O, P o S.");
        return;
    }

    // Validación de la dirección
    const direccion = document.getElementById('direccion').value;
    if (!/^(casa|apartamento)/i.test(direccion)) {
        alert("La dirección debe iniciar con la palabra 'casa' o 'apartamento'.");
        return;
    }

    // Validación del correo
    const correo = document.getElementById('correo').value;
    if (!/gmail\.com$/i.test(correo)) {
        alert("El correo debe terminar con 'gmail.com'.");
        return;
    }

    // Validación de palabras terminadas en "as"
    const texto = document.getElementById('texto').value;
    const palabrasConAs = texto.match(/\b\w*as\b/gi) || [];
    alert("El número de palabras que terminan con 'as' es: " + palabrasConAs.length);

    // Validación del teléfono
    const telefono = document.getElementById('telefono').value;
    if (!/^[27]\d{7}$/.test(telefono)) {
        alert("El teléfono debe iniciar con 2 (casa) o 7 (celular) y tener 8 dígitos.");
        return;
    }

    // Validación de compañía de celular
    const compania = document.getElementById('compania').value;
    if (/^79|^72/.test(compania)) {
        alert("La compañía es Tigo.");
    } else if (/^77|^75/.test(compania)) {
        alert("La compañía es Movistar.");
    } else if (/^71|^73/.test(compania)) {
        alert("La compañía es Digicel.");
    } else {
        alert("Número de teléfono no reconocido.");
        return;
    }

    // Validación de género
    const genero = document.getElementById('genero').value;
    if (/^masculino$/i.test(genero)) {
        alert("Género identificado: Masculino (1)");
    } else if (/^femenino$/i.test(genero)) {
        alert("Género identificado: Femenino (2)");
    } else {
        alert("Género no reconocido.");
        return;
    }

    alert("Todas las validaciones fueron exitosas.");
});