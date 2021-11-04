let nombre = prompt("Ingrese su nombre");

function llamar (n) {
    return 'Hola ' + nombre;
}

let p = document.createElement("p");
let t = document.createTextNode(llamar(nombre));
p.appendChild(t);

document.body.appendChild(p);