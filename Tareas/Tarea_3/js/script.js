
let uno = "images/one.JPG";
let dos = "images/dos.JPG";
let tres = "images/tres.JPG";
let cuatro = "images/cuatro.JPG";
let cinco = "images/cinco.JPG";
let seis = "images/seis.JPG";

let valores_dados = [uno, dos, tres, cuatro, cinco, seis];

let image_index = 0;

let image = document.getElementById("imagen_dado");

function lanzar_dado() {
    image_index = Math.floor(Math.random() * 6) + 0;
    image.setAttribute("src",valores_dados[image_index]);
};

let intervalHandle;

image.onclick = event => {
    if (event.detail === 1) {
        clearInterval(intervalHandle);
    } else if (event.detail === 2) {
        intervalHandle = setInterval(lanzar_dado,300);
    }
 };

 /* Tambien podriamos hacerlo de este modo:
    image.ondblclick = function () {
    intervalHandle = setInterval(lanzar_dado,300);
    }

    image.onclick =  function () {
	clearInterval(intervalHandle);
    };
*/
