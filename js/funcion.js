// Ocultando Ventanas

$('.alert').hide();


// revisando inputs
$(document).ready(function(){
  var boton_rut;
  boton_rut = $('.btn-enviar');
  boton_rut.on('click', function(){
  var valor_input, valor_rut;
  valor_input = $('.email');
  valor_rut = valor_input.val();

    if(valor_rut === ''){
         $('.alert').fadeIn();
         return false
    }
    else{
       
      // transicion
     return true

    } 
  });  
});





