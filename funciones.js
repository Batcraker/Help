function Fecha() {
    meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
    data = new Date();
    index = data.getMonth();
    diasemana = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"];
    indexday = data.getDay();
    if (indexday == 0)
        indexday = 7;
    any = data.getYear();
    if (any < 1900)
        any = 1900 + any;
    return diasemana[indexday - 1] + ', ' + data.getDate() + " de " + meses[index] + " de " + any
}


document.querySelector('.fechactual').innerHTML = `<b>${Fecha()}</b>`


// $('.detalles').click((e) => {
//         alert('HOLA');
//         let desc = 'sfb';
//         let num = '1';

//         let nom = '<p>NUM: $(num)</p><p>DESC: $(desc)</p>';
//         $('.ventana-modal').css('opacity', '0');
//         $('ventana-modal').css('visibility','hidden');
//         $('modal1').html(nom);
//     });