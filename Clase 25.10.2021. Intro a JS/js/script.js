console.log('Hola Mundo!!!!')
let i, diez = "10"
i = 10
console.log(i)
if (i % 2 == 0) 
    console.log('Par')
console.log(diez)
if(i === diez)
    console.log('Good')
else 
    console.log('Bad')

let dias = new Array(2);

dias[0] = 'lunes'
dias[1] = 'martes'

let htmlDias = "<ul>"
for (let i = 0; i < dias.length; i++) {
    htmlDias += "<li>"
    htmlDias += dias[i]
    htmlDias += "</li>"
}
htmlDias += "<ul>"


//document.getElementById('semana').innerHTML = htmlDias

//dame todos los tag name de tipo p pero coge solo el primer elemento
document.getElementsByTagName('p')[0].innerHTML='<b>Loren Ipsum</b>'


let h = document.createElement('h3')
let t = document.createTextNode('Title with JS')
h.appendChild(t)
document.body.appendChild(h)
//document.body.insertBefore(htmlDias, h) insertr antes, htmldias tiene que ser un node