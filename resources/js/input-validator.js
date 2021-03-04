// Validación por medio de expresiones regulares

$(document).ready(function () {
    // Nombres y apellidos
    $(".name").on("input keydown paste", function (event) {
        var inputText = $(this).val();
        var resultText = inputText.replace(/[^a-zA-ZáéíóúÁÉÍÓÚñÑçÇ.' ]/g, '');
        $(this).val(resultText);
    });

    // Números como telefónicos o campos exclusivamente llenados con números enteros
    $(".number").on('input keydown paste', function () {
        var inputText = $(this).val();
        var resultText = inputText.replace(/[^0-9]/g, '');
        $(this).val(resultText);
    });

    /* Restringe carácteres no propios de los correos electrónicos,
    como espacios y signos, exceptuando punto y guiones */
    $(".email").on("input keydown paste", function (event) {
        var inputText = $(this).val();
        var resultText = inputText.replace(/[^a-zA-Z0-9@.-_]/g, '');
        $(this).val(resultText);
    });

    // Números con decimales, permite comas y puuntos
    $(".decimal").bind("keypress", function (event) {
        if (event.charCode != 0) {
            var regex = new RegExp("^[0-9.]+$");
            var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
        }
    });
});

// $(document).on('change', input[])
$(document).ready(function ($) {
    $('.dropdown').on('shown.bs.dropdown', function (e) {
        $('.dropdown-menu #email').focus();
    })
});

$(".letras_numeros").bind('keypress', function(event) {
    var regex = new RegExp("^[a-zA-Z0-9]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
        event.preventDefault();
        return false;
    }
});

 //Permite letras y números, pues sirven para los nombres de calles
  //y números exteriores e interiores, permite algunos carácteres
  //especiales como - . #
  $(".street-names").bind("keypress", function(event) {
    if (event.charCode != 0) {
      var regex = new RegExp("^[a-zA-Z0-9áéíóúÁÉÍÓÚ. \-]*$");
      var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
      if (!regex.test(key)) {
        event.preventDefault();
        return false;
      }
    }
  });

  //Permite carácteres propios del RFC y del CURP
  //(sin carácteres especiales)
  $(".rfc-curp").bind("keypress", function(event) {
    if (event.charCode != 0) {
      var regex = new RegExp("^[a-zñ&A-ZÑ&0-9]+$");
      var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
      if (!regex.test(key)) {
        event.preventDefault();
        return false;
      }
    }
  });

    //RFC y CURP a mayúsculas
    $('.rfc-curp').bind("keyup", function() {
        $(this).val($(this).val().toUpperCase());
    });
