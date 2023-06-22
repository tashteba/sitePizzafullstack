// Slider is here
const slide = ['pizzaSlide1.jpeg','pizzaSlide2.jpeg','pizzaSlide3.jpeg'];
let numero = 0;

function ChangeSlide(sens) {
    numero = numero + sens;
    if (numero < 0)
        numero = slide.length - 1;
    if (numero > slide.length - 1)
        numero = 0;
   document.getElementById('slide').src = 'assets/photos/' + slide [numero];
}

setInterval("ChangeSlide (1)", 4000)




